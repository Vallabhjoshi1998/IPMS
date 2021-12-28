<?php
include 'admin_dash_header.php';
$connectDb = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
if (!empty($_POST['save'])) {
    $regNo = $_POST['regNo'];

    $prof = "SELECT * FROM info WHERE regNo= '$regNo'";
    $res_prof = mysqli_query($connectDb, $prof);
    $res = mysqli_fetch_array($res_prof);
    $fname = $res['fname'];
    $lname = $res['lname'];
    $email_id = $res['email_id'];
    $mobNo = $res['mobNo'];
    $par_mobNo = $res['par_mobNo'];
    $dept = $res['dept'];
    $sem = $res['sem'];
    $regNo = $res['regNo'];
    $pass10 = $res['pass10'];
    $per10 = $res['per10'];
    $pass12 = $res['pass12'];
    $per12 = $res['per12'];
    $passDip = $res['passDip'];
    $perDip = $res['perDip'];
    $admission = $res['admission'];
    $sgpa1 = $res['sgpa1'];
    $sgpa2 = $res['sgpa2'];
    $sgpa3 = $res['sgpa3'];
    $sgpa4 = $res['sgpa4'];
    $sgpa5 = $res['sgpa5'];
    $sgpa6 = $res['sgpa6'];
    $sgpa7 = $res['sgpa7'];
    $sgpa8 = $res['sgpa8'];
    $avgSgpa = $res['avgSgpa'];
    $passout = $res['passout'];
    $live = $res['live'];
    $dead = $res['dead'];
    $placement_status = $res['placement_status'];
    $option1 = $res['option1'];
    $gap = $passout - $pass10;




    $prof = "SELECT * FROM info WHERE email_id='$email_id'";
    $res_prof = mysqli_query($connect, $prof);
    $res = mysqli_fetch_array($res_prof);

    $user_profile = $res['profile_img'];


    $ac = "SELECT * FROM login_details WHERE email_id='$email_id'";
    $res_ac = mysqli_query($connect, $ac);
    $ac_res = mysqli_fetch_array($res_ac);
    $ac_type = $ac_res['ac_type'];


?>

    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <link href="../../assets/css/profile.css" rel="stylesheet">
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!------ Include the above in your HEAD tag ---------->

    <div class="container emp-profile">
        <div class="row">
            <div class="col-md-4" style="float: left;">

                <img class="img-profile" src="../profile_img/<?php echo $user_profile ?>" onerror=this.src="../profile_img/def.jpg" style="height: 120px; width: 120px; ">


                <br>
                <br>

            </div>
            <br>

            <!-- <div class="col-md-4" style="float: right;">
                <br><br>

                <label for="ac_type"> Account Type : <?php // echo $ac_type ?></label>
                <button type="submit"class="submit" placeholder="Update to Student TPC Co-ordinator" onclick="changeType()"></button><br>

            </div>
            <script>
                function changeType() {
                    document.getElementById(changeType);

                }
            </script> -->



        </div>

        <div id="myTab" role="tablist">
            <div class="nav-item" class="details" style="font-weight: 600; font-size: 25px;">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
            </div>
        </div>

        <div class="col-md-8">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <label>User Id / Email Id</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $email_id ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $fname ?><?php echo " " ?><?php echo $lname ?></p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <label>Student Mobile Number</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $mobNo ?></p>
                        </div>
                        <div class="col-md-6">
                            <label>Parent Mobile Number</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $par_mobNo ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="myTab" role="tablist" class="details" style="font-weight: 600; font-size: 25px;">
            <div class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Educational Details</a>
            </div>
        </div>

        <div>
            <div class="tab-content profile-tab" id="myTabContent">
                <div id="home" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Department</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $dept ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Semester</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $sem ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Registration Number</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $regNo ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>10 Year of Passing</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $pass10 ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>10th Percentage</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $per10 ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>12th Year of Passing</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $pass12 ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>12th Percentage</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $per12 ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Diploma Year of Passing</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $passDip ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Diploma Percentage</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $perDip ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Engineering Admission Year</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $admission ?></p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <label>1st Semester SGPA</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $sgpa1 ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>2st Semester SGPA</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $sgpa2 ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>3rd Semester SGPA</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $sgpa3 ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>4th Semester SGPA</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $sgpa4 ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>5th Semester SGPA</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $sgpa5 ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>6th Semester SGPA</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $sgpa6 ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>7th Semester SGPA</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $sgpa7 ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>8th Semester SGPA</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $sgpa8 ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Average SGPA / CGPA</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $avgSgpa ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Passout Year</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $passout ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Gap in Education</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $gap - 6 ?>&nbsp; Years</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="myTab" role="tablist" class="details" style="font-weight: 600; font-size: 25px;">
            <div class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Option Selected Placement / Higher Studies</a>
            </div>
        </div>

        <div>
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Option Selected</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $option1 ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="myTab" role="tablist" class="details" style="font-weight: 600; font-size: 25px;">
            <div class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Placement Status</a>
            </div>
        </div>

        <div>
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Status of Placement</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $placement_status ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>

        <section>
            <h1 class="details" style="font-weight: 600; font-size: 25px;">Placement Details</h1>
            <div class="ipms-table">
                <table cellpadding="10" cellspacing="10" border="0">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Salary</th>
                            <th>Offer Letter</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $place = "SELECT * FROM placement_data WHERE email_id='$email_id'";
                        $res_place = mysqli_query($connectDb, $place);
                        if (mysqli_num_rows($res_place) > 0) {
                            while ($row = mysqli_fetch_assoc($res_place)) {
                                $company_name = $row['company_name'];
                                $sal_lpa = $row['sal_lpa'];

                                $offer = "SELECT * FROM offerletter WHERE regNo='$regNo'";
                                $res_offer = mysqli_query($connect, $offer);
                                $res1 = mysqli_fetch_assoc($res_offer);
                                $offer_letter = $res1['source'];
                        ?>

                                <tr>
                                    <td> <?php echo $company_name ?> </td>
                                    <td> <?php echo $sal_lpa ?> </td>
                                    <td><embed src="../offer_letters/<?php echo $offer_letter ?>" width="300px" height="400px" /></td>
                                </tr>
                        <?php

                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

        <br>
        <br>

        <section>
            <h1 class="details" style="font-weight: 600; font-size: 25px;">Internship Details</h1>
            <div class="ipms-table">
                <table cellpadding="10" cellspacing="10" border="0">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                        </tr>
                    </thead>



                    <?php

                    $intern = "SELECT * FROM internship_data where email_id = '$email_id'";

                    $res_intern = mysqli_query($connectDb, $intern);

                    if (mysqli_num_rows($res_intern) > 0) {
                        // output data of each row
                        while ($row_intern = mysqli_fetch_assoc($res_intern)) {
                            $comp_name = $row_intern['company_name'];
                            $start_date = $row_intern['start_date'];
                            $end_date = $row_intern['end_date'];
                    ?>
                            <tr>
                                <td> <?php echo $comp_name ?> </td>
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
        <br><br>
       

    <?php
}
include 'admin_dash_footer.php';
    ?>