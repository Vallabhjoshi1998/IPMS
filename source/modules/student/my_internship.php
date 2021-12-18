<?php
include 'student_dash_header.php';
?>



<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4" id="attendance" href=" " onclick="attendance()">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">

                        <div class="h5 mb-0 font-weight-bold text-gray-800" href=" ">Mark Attendance</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function attendance() {
            window.location.href = "attendance-form.php";
        }
    </script>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4" href=" " onclick="report()">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">

                        <div class="h5 mb-0 font-weight-bold text-gray-800">Weekly Report</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function report() {
            window.location.href = "student-diary.php";
        }
    </script>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4" href=" " onclick="feedback()">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">

                        <div class="h5 mb-0 font-weight-bold text-gray-800">Student Feedback</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<script>
    function feedback() {
        window.location.href = "form.php";
    }
</script>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4" id="attendance" href=" " onclick="bio_data()">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">

                        <div class="h5 mb-0 font-weight-bold text-gray-800" href=" ">Student Biodata</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function bio_data() {
            window.location.href = "biodata.php";
        }
    </script>
</div>

<section>
    <h1>My Internships</h1>
    <div class="ipms-table">
        <table cellpadding="10" cellspacing="10" border="10">
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
            </thead>



            <?php

            $query = "SELECT * FROM internship_data where email_id = '$username'";

            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $company_name = $row['company_name'];
                    $start_date = $row['start_date'];
                    $end_date = $row['end_date'];
            ?>
                    <tr>
                        <td> <?php echo $company_name ?> </td>
                        <td> <?php echo $start_date ?> </td>
                        <td> <?php echo $end_date ?> </td>
                    </tr>

            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</section>


<?php
include 'student_dash_footer.php';
?>