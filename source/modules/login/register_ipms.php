<?php
include 'header.php';
?>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto" style="color: aqua;"><a href="index.html"><span>Y C C E</span></a></h1>
        <div style="padding-top: 0.8%; padding-right: 36%;">
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
       
<div class="container" style="margin-bottom: 4%;">


<div class="card o-hidden border-0 shadow-lg p-3" style="margin-top: 10%;">
    <div class="card-body p-1">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form class="user" action="registerConnect_ipms.php" onsubmit="return userValid()" method="GET" id="registerUs">
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
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                        placeholder="Email Address" name="username" required>
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                            placeholder="Password" name="pass" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"
                            placeholder="Repeat Password" name="cnf_pass" required>
                    </div>
                </div>
                <!-- <a href="login.html" type="submit" name="save" class="btn btn-primary btn-user btn-block">
                    Register Account
                </a> -->
                <div>
                    &nbsp;
                </div>
                <div class="submit">
                    <input type="submit" name="save" class="btn btn-default" style="background-color:#04AA6D; color: white;" value="Submit" >
                </div>

            </form>

            <!-- <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div> -->
            <div class="text-center">
                <a class="small" href="student_login.php">Already have an account? Login!</a>
            </div>
        </div>
    </div>

</div>
<?php
include 'footer.php';
?>