<?php
include 'header.php';
?>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto" style="color: aqua;"><a href="index.html"><span>Y C C E</span></a></h1>
        <div style="padding-top: 0.8%; padding-right: 31%;">
            <h6 color: rgb(2, 8, 20);><span>Internship & Placement Management System</span></h6>
        </div>


        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="../../index.php">Home</a></li>
                <li><a class="nav-link scrollto " href="register_ipms.php">Sign Up</a></li>
                <li><a class="nav-link scrollto" href="../contact.php">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <!-- <a href="login_dialog.html" class="get-started-btn scrollto">Sign In</a> -->

        <button id="modal-btn" class="get-started-btn scrollto">Sign In</button>


        <div class="modal">
                <div class="modal-content text-center">
                    <!--Header-->
                    <div class="modal-header d-flex justify-content-center">
                        <p class="heading">Please choose any one preferred option !</p>
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <a href="student_login.php" class="btn  btn-danger waves-effect">Student Login</a>
                        <a href="admin_login.php" class="btn  btn-danger waves-effect">Admin Login</a>
                        <a href="supervisor_login.php" class="btn  btn-danger waves-effect">Supervisor Login</a>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="close-btn" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
</header>
       
<div class="container">


<div class="card o-hidden border-0 shadow-lg p-3" style="margin-top: 10%;">
    <div class="card-body p-1">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">More Information</h1>
            </div>
            <form class="user" action="addInfoConnect.php"  method="POST" id="register">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                            placeholder="First Name" name="fname" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                            placeholder="Last Name" name="lname" required>
                    </div>
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="form-group row">
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                        placeholder="Email Address" name="email_id" required>
                </div>
                <div>&nbsp;</div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="mobNo"
                            placeholder="Student Mobile Number" name="mobNo" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="par_mobNo"
                            placeholder="Parent Mobile Number" name="par_mobNo" required>
                    </div>
                </div>
                <div>&nbsp;</div>
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="dept"
                            placeholder="Department" name="dept" required>
                </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="Semester"
                            placeholder="Semester" name="sem" required>
                </div>
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="regNo"
                            placeholder="Registration Number" name="regNo" required>
                </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-6" >
                        <input type="text" class="form-control form-control-user" id="pass10"
                            placeholder="10th Passout Year" name="pass10" required>
                </div>
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="per10"
                            placeholder="10th Percentage" name="per10" required>
                </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="pass12"
                            placeholder="12th Passout Year" name="pass12" required>
                </div>
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="per12"
                            placeholder="12th Percentage" name="per12" required>
                </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="passDip"
                            placeholder="Diploma Passout Year" name="passDip" required>
                </div>
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="perDip"
                            placeholder="Diploma Percentage" name="perDip" required>
                </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="admission"
                            placeholder="Engineering Admission Year" name="admission" required>
                </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="sgpa1"
                            placeholder="1st Semester SGPA" name="sgpa1" required>
                </div>
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="sgpa2"
                            placeholder="2nd Semester SGPA" name="sgpa2" required>
                </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="sgpa3"
                            placeholder="3rd Semester SGPA" name="sgpa3" required>
                </div>
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="sgpa4"
                            placeholder="4th Semester SGPA" name="sgpa4" required>
                </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="sgpa5"
                            placeholder="5th Semester SGPA" name="sgpa5"required>
                </div>
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="sgpa6"
                            placeholder="6th Semester SGPA" name="sgpa6" required>
                </div>
                </div>
                <div class="form-group row" style="text-align: center;" required>
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="sgpa7"
                            placeholder="7th Semester SGPA" name="sgpa7" required>
                </div>
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="sgpa8"
                            placeholder="8th Semester SGPA" name="sgpa8" required>
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="form-group row">
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="avgSgpa"
                            placeholder="Average SGPA" name="avgSgpa" required>
                </div>
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="passout"
                            placeholder="Passout Year" name="passout" required>
                </div>
                </div>
                <div class="form-group row" style="text-align: center;" required>
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="live"
                            placeholder="Live Backlog" name="live" required>
                </div>
                <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="dead"
                            placeholder="Dead Backlog" name="dead" required>
                </div>
                </div>
                
                <div style="text-align: center;">
                <label for="option1">Select One Option</label></b><br>
                <label for="option1">Placement facility by College</label>
                <input type="radio" id="option1" name="option1" value="Placement facility by College">
                <label for="option1">Higher Studies</label>
                <input type="radio" id="option1" name="option1" value="Higher Studies">
                <label for="option1">Entrepreneurship</label>
                <input type="radio" id="option1" name="option1" value="Entrepreneurship">
                </div>

                <div>
                    &nbsp;
                </div>
                <div style="text-align: center;">
                <label for="Placement">Placement Status</label></b><br>
                <label for="placed">Placed</label>
                <input type="radio" id="placed" name="placement_status" value="Placed">
                <label for="placed">Unplaced</label>
                <input type="radio" id="placed" name="placement_status" value="Unplaced">
                </div>

                <div>
                    &nbsp;
                </div>
                <div class="submit">
                    <input type="submit" name="save" class="btn btn-default" style="background-color:#04AA6D; color: white; text-align: center;" value="Submit" >
                </div>

            </form>

        </div>
    </div>

</div>
<?php
include 'footer.php';
?>