<?php
session_start();
include 'student_dash_header.php';
?>

<?php

$connect = mysqli_connect("localhost", "root", "", "ipms") or die("Connection failed");
$_SESSION['errorMessage'] = false;

$query = "select * from placement_data where email_id = '$username'";
$result = mysqli_query($connect, $query);
$count = mysqli_num_rows($result);
?>




<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Your Total Offers</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count ?> Offers</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="col-xl-3 col-md-6" style="margin-top: 1.5%; margin-left: 50%;">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="offer_letter" id="" style="margin-bottom: 2px;">
            <button class="btn btn-primary" name="save" data-toggle="tooltip" data-placement="bottom" title="File format - FirstName_LastName_CompanyName_BranchName">
                <svg xmlns="http://www.w3.org/2000/svg" style="height: 20px;" class="animate-pulse" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
                Upload Offer Letters
            </button>
        </form>
    </div> -->

    <script>
        history.pushState(null, null, null);
        window.addEventListener('popstate', function() {
            history.pushState(null, null, null);
        });
    </script>


</div>


<?php
include 'student_dash_footer.php';
?>