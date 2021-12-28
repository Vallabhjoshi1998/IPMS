<?php
session_start();
include 'admin_dash_header.php';

$connect = mysqli_connect("localhost", "root", "", "ipms") or die("Connection failed");
$_SESSION['errorMessage'] = false;

$query1 = "SELECT * FROM placement_data WHERE batch='$batch'";
$result1 = mysqli_query($connect, $query1);
$count1 = mysqli_num_rows($result1);

$quer = "SELECT DISTINCT(email_id) FROM placement_data WHERE batch='$batch'";
$res = mysqli_query($connect, $quer);
$coun = mysqli_num_rows($res);

$que = "SELECT * FROM internship_data WHERE batch='$batch'";
$re = mysqli_query($connect, $que);
$cou = mysqli_num_rows($re);

?>


<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Placement Offers</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count1 ?> Offers</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Students Placed</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $coun ?> Students</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Internships Offers</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $cou ?> Offers</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    history.pushState(null, null, null);
    window.addEventListener('popstate', function() {
        history.pushState(null, null, null);
    });
</script>

<?php
include 'admin_dash_footer.php';
?>