<?php include 'admin_dash_header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YCCE - Student Attendance</title>
</head>

<body>
    <?php
    // if(!session_start()){
    //     session_start();
    // }
    if (!empty($_POST['save'])) {

        $conn = mysqli_connect("localhost", "root", "", "ipms");

        $_SESSION['reg_no'] = $_POST['reg_no'];
        $reg_no = $_SESSION['reg_no'];
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM  attendance_internship where reg_no = '$reg_no'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    ?>

        <div class="container py-1">
            <div class="row py-5">
                <div class="col-lg-10 mx-auto">
                    <div class="card rounded shadow border-0">
                        <div class="card-body p-5 bg-white rounded">
                            <div class="table-responsive">
                                <div>
                                    <img style="width: 98%;" src="header.png" alt="" srcset="">
                                </div>
                                <header class="text-center text-black">
                                    <h3>STUDENT ATTENDANCE</h3>
                                </header>

                                <table style="width:100%" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Registration Number</th>
                                            <th>Student Name</th>
                                            <th>Name of Organisation</th>
                                            <th>Address of Organisation</th>
                                            <th>Class Roll Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['reg_no']; ?></td>
                                            <td><?php echo $row['stud_name']; ?></td>
                                            <td><?php echo $row['name_of_org']; ?></td>
                                            <td><?php echo $row['address_of_org']; ?></td>
                                            <td><?php echo $row['att_rno']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table style="width: 100%;" class="table table-bordered">
                                    <thead>
                                        <th>Name of Course</th>
                                        <th>Commencement Date</th>
                                        <th>Completion Date</th>
                                        <th>Authority Name</th>
                                        <th>Authority Number</th>
                                    </thead>
                                    <tbody>
                                        <td><?php echo $row['name_of_course']; ?></td>
                                        <td><?php echo $row['comm_date']; ?></td>
                                        <td><?php echo $row['comp_date']; ?></td>
                                        <td><?php echo $row['authority_name']; ?></td>
                                        <td><?php echo $row['authority_number']; ?></td>
                                    </tbody>
                                </table>


                                <table id="example" style="width:100%" class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Date</th>
                                            <th>Attendance</th>
                                        </tr>
                                        <?php
                                        $sql = "SELECT att_date,attendance FROM attendance_internship where reg_no = '$reg_no'";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['att_date']; ?></td>
                                                <td><?php echo $row['attendance']; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form action="create_pdf_attendance.php" method="post" style="padding-bottom: 10%; margin-left: 45%;">
            <button type="submit" class="btn btn-primary" name="create_pdf">Create PDF</button>
        </form>

</body>
<?php
    }
?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>

<?php include 'admin_dash_footer.php' ?>