<?php
session_start();
include 'student_dash_header.php';
$con = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
$prof = "SELECT * FROM info WHERE email_id='$username'";
$res_prof = mysqli_query($con, $prof);
$res = mysqli_fetch_array($res_prof);

$user_profile = $res['profile_img'];

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

?>

<link href="../../assets/css/profile.css" rel="stylesheet">

<div class="container emp-profile">
    <div class="row">
        <div class="col-md-4">
            <div class="profile-img">
                <img src="../profile_img/<?php echo $user_profile ?>" onerror=this.src="../profile_img/def.jpg">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type='file' name='u_image' size='60'/>
                    </div>
                    <button class="profile-edit-btn" name="update">&nbsp;&nbsp;</i>Update Profile Pic</button>
                </form>

            </div>
            <br>
        </div>

        <?php
        if (isset($_POST['update'])) {
            $u_image = $_FILES['u_image']['name'];
            $image_tmp = $_FILES['u_image']['tmp_name'];
            $random_number = rand(1, 100);

            if ($u_image == '') {
                echo "<script>alert('Please Select Profile Image')</script>";
                echo "<script>window.open('profile.php', '_self')</script>";
                exit();
            } else {
                move_uploaded_file($image_tmp, "../profile_img/$u_image.$random_number");
                $update = "UPDATE info SET profile_img='$u_image.$random_number' WHERE email_id='$username'";

                $run = mysqli_query($con, $update);
                if ($run) {
                    echo "<script>alert('Your Profile Image Has Been Updated')</script>";
                    echo "<script>window.open('profile.php', '_self')</script>";
                }
            }
        }

        ?>


        
    </div>

    <div>
        <table style="height: 50%;">
            <tr>
                <th>
                    <form action="editDetails.php">
                        <!-- <div style="margin-right: 50%;"> -->
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Educational Details">
                        <!-- </div> -->
                    </form>
                </th>
                <th>
                    <form action="editStatus.php">
                        <!-- <div style="margin-left: 50%;"> -->
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Placement Status">
                        <!-- </div> -->
                    </form>
                </th>
            </tr>
        </table>
    </div>

    <br>
    <br>

    <div id="myTab" role="tablist" style="text-align: left; font-weight:700; font-size: 25px;">
        <div class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
        </div>
    </div>

    <div class="col-md-8">
        <div class="tab-content profile-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
    <div id="myTab" role="tablist" style="text-align: left; font-weight:700; font-size: 25px;">
        <div class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Educational Details</a>
        </div>
    </div>

    <div>
        <div class="tab-content profile-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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

    <div id="myTab" role="tablist" style="text-align: left; font-weight:700; font-size: 25px;">
        <div class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Option Selected Placement / Higher Studies</a>
        </div>
    </div>

    <div>
        <div class="tab-content profile-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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

    <div id="myTab" role="tablist" style="text-align: left; font-weight:700; font-size: 25px;">
        <div class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Placement Status</a>
        </div>
    </div>

    <div>
        <div class="tab-content profile-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
</div>

<?php
include 'student_dash_footer.php';
?>