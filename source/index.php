<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>YCCE-IPMS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon (2).png" rel="icon">
    <link href="assets/img/favicon (2).png" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/modal.css">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto" style="color: aqua;"><a href="index.html"><span>Y C C E</span></a></h1>
            <div style="padding-top: 0.8%; padding-right: 31%;">
                <h6 color: rgb(2, 8, 20);><span>Internship & Placement Management System</span></h6>
            </div>


            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto " href="modules/login/register_ipms.php">Sign Up</a></li>
                    <li><a class="nav-link scrollto" href="modules/contact.php">Contact</a></li>
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
                        <a href="modules/login/student_login.php" class="btn  btn-danger waves-effect">Student Login</a>
                        <a href="modules/login/admin_login.php" class="btn  btn-danger waves-effect">Admin Login</a>
                        <a href="modules/login/supervisor_login.php" class="btn  btn-danger waves-effect">Supervisor Login</a>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="close-btn" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>

        </div>

    </header><!-- End Header -->



    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-xl-6">
                    <h1>Our Vision</h1>
                    <h2>To become the most preferred institution providing innovative, research and value based,
                        professional
                        education for the society at large</h2>
                    <a href="#about" class="btn-get-started scrollto">About Us</a>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Yeshwantrao Chavan College Of Engineering, Nagpur</h3>
                            <p>
                                YCCE is the prominent institution acknowledged for remarkable engineering education and
                                research. Since
                                35 years the institution has magnificently cherished and encouraged the forthcoming
                                engineering
                                professionals across the country making us one of the most opted engineering colleges in
                                Maharashtra.
                            </p>
                            <a href="#" class="about-btn"><span>Our Vision</span> <i
                                    class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Attract best talent and create learning ambience</h4>

                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Practice Innovative teaching-learning & research</h4>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-images"></i>
                                    <h4>Integrate Industry-Institute Collaborations</h4>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-shield"></i>
                                    <h4>Nurture students towards holistic development and choicest career</h4>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/modal.js"></script>

</body>

</html>