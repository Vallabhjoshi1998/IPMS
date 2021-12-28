<?php
include_once '../utility/dbconfig.php';

// session_start();
if (!isset($_SESSION)) {
    session_start();
}
$username = $_SESSION["username"];
$batch = $_SESSION['batch'];

$query = "select fname from admin_details where email_id ='$username'";

$result = mysqli_query($connect, $query);
$row_admin_name = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../assets/css/table.css" rel="stylesheet">
    <link href="../../assets/css/input-style.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin_dash.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Placements</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Drive Management</h6>
                        <a class="collapse-item" href="current_drives.php"> Add Current Drives</a>
                        <a class="collapse-item" href="display_current_drives.php"> Display Current Drives</a>

                        <a class="collapse-item" href="eligibilityCriteria.php">Eligibility List</a>
                        <a class="collapse-item" href="allPlacement.php"> All Placements</a>
                        <a class="collapse-item" href="companywise_placed.php">Companywise Total<br> Placed</a>
                        <a class="collapse-item" href="trigger_mails.php"> Trigger Mails</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Internships</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Internship Management</h6>
                        <a class="collapse-item" href="add_internship_oppurtunities.php">Add Opportunities</a>
                        <a class="collapse-item" href="view_oppurtunities.php">View Opportunities</a>
                        <a class="collapse-item" href="allInternship.php">All Internships</a>
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Add Placement Details</span>
                </a>
                <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Placement Data & Details</h6>
                        <a class="collapse-item" href="add_placement_details.php">Add Details</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Check Students Profile</span>
                </a>
                <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Check Students Profile</h6>
                        <a class="collapse-item" href="studProf.php">Check Profile</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Add T&P Co-ordinator</span>
                </a>
                <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Add T&P Co-ordinator</h6>
                        <a class="collapse-item" href="addCo.php">Add Co-ordinator</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities4" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Feedback Forms</span>
                </a>
                <div id="collapseUtilities4" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">See Student Feedback Data</h6>
                        <a class="collapse-item" href="stud_feedback_data.php">Student Feedback</a>
                        <a class="collapse-item" href="stud_attendance_data.php">Student Attendance</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Welcome Quote -->
                    <div>
                        <h1 class="h3 mb-0 text-gray-800">Welcome back,
                            <?php
                            echo $row_admin_name[0];
                            ?></h1>
                    </div>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <?php
                                $alert_query = "SELECT * FROM alert WHERE batch='$batch'";
                                $alert_res = mysqli_query($connect, $alert_query);
                                $total = mysqli_num_rows($alert_res);
                                if ($total > 0) {
                                    $_SESSION['errorMessage'] = false;
                                ?>

                                    <a class="dropdown-item d-flex align-items-center" href="#">

                                       

                                        <?php


                                        while ($row    = mysqli_fetch_array($alert_res)) {

                                            $alert_id = $row['alert_id'];
                                            $alert_date = $row['alert_date'];
                                            $alert = $row['alert'];

                                        ?>
                                            
                                            Notification Id: <?php echo $alert_id ?><br>
                                            Notification Date: <?php echo $alert_date ?><br>
                                            Notification:<?php echo $alert ?><br>
                                                
                                        <?php }
                                    } ?>
                                           
                                            <!-- <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"><?php //echo $alert_date; 
                                                                            ?></div>
                                        <span class="font-weight-bold"></span>
                                    </div>
                                 &nbsp;<br>
                                    <div>
                                        <div class="small text-gray-500"><?php //echo $alert; 
                                                                            ?></div>
                                        <span class="font-weight-bold"></span>
                                    </div> -->
                                    </a>


                                    <a class="dropdown-item text-center small text-gray-500" href="addNotification.php">Add Notification</a>
                                    <a class="dropdown-item text-center small text-gray-500" href="delete_notification.php">Delete Notification</a>

                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <span class="mr-2 d-none d-lg-inline text-gray-600 small">User Name</span> -->
                                <img class="img-profile rounded-circle" src="../../assets/img/favicon.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="container-fluid">