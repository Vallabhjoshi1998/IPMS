<?php
include 'header.php';
?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto" style="color: aqua;"><a href="index.html"><span>Y C C E</span></a></h1>
        <div style="padding-top: 0.8%; padding-right: 36%;">
            <h6 color: rgb(2, 8, 20);><span>Internship & Placement Management System</span></h6>
        </div>


        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="../../index.php">Home</a></li>
                <!-- <li><a class="nav-link scrollto" href="../../index.php">About</a></li> -->
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


</header><!-- End Header -->

<div class="container" style="margin-top: 6%;">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <!-- <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6"> -->
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Supervisor Login</h1>
                        </div>
                        <form class="user" action="supervisor_signinConnect.php" method="POST">
                            <div class="form-group mb-3">
                                <input type="email" name="username" class="form-control form-control-user"
                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                    placeholder="Enter Email Address..." required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                    name="pass" placeholder="Password" required>
                            </div><br>
                            
                            <input type="submit" name="save" class="btn btn-default" value="Login" style="background-color:#04AA6D; color: white; margin-left: 46.5%;">
                        </form>
<!-- 
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div> -->
                    </div>
                </div>
                <!-- </div>
                    </div>
                </div> -->

            </div>

        </div>

    </div>
    <?php
include 'footer.php';
?>