<?php include 'admin_dash_header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YCCE - Student Biodata</title>
</head>

<body>
    <?php
    if (!empty($_POST['save'])) {

        $conn = mysqli_connect("localhost", "root", "", "ipms");

        $_SESSION['reg_no'] = $_POST['reg_no'];
        $reg_no = $_SESSION['reg_no'];
    
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM biodata where stud_eno = '$reg_no'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    ?>

        <div class="container py-1">
            <div class="row py-5">
                <div class="col-lg-10 mx-auto">
                    <div class="card rounded shadow border-0" style="width: 1000px;">
                        <div class="card-body p-5 bg-white rounded">
                            <div class="table-responsive">
                                <div>
                                    <img style="width: 98%;" src="header.png" alt="" srcset="">
                                </div>
                                <header class="text-center text-black">
                                    <h3>STUDENT BIODATA</h3>
                                </header>

                                <h4>Student Details</h4>
                                <table style="width:100%" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Enrollment Number:</th>
                                            <th>Year</th>
                                            <th>Campus Address</th>
                                            <th>Mobile Number</th>
                                            <th>Email ID</th>
                                            <th>State</th>
                                            <th>City</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['stud_name']; ?></td>
                                            <td><?php echo $row['stud_eno']; ?></td>
                                            <td><?php echo $row['stud_year']; ?></td>
                                            <td><?php echo $row['stud_cAddresss']; ?></td>
                                            <td><?php echo $row['stud_phone']; ?></td>
                                            <td><?php echo $row['stud_email']; ?></td>
                                            <td><?php echo $row['stud_state']; ?></td>
                                            <td><?php echo $row['stud_city']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h4>Industrial Supervisor</h4>
                                <table style="width: 100%;" class="table table-bordered">
                                    <thead>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Organization</th>
                                        <th>Internship Campus Address</th>
                                        <th>Mobile Number</th>
                                        <th>Email ID</th>
                                        <th>State</th>
                                        <th>City</th>
                                    </thead>
                                    <tbody>
                                        <td><?php echo $row['sup_name']; ?></td>
                                        <td><?php echo $row['sup_title']; ?></td>
                                        <td><?php echo $row['sup_org']; ?></td>
                                        <td><?php echo $row['ic_addresss']; ?></td>
                                        <td><?php echo $row['sup_phone']; ?></td>
                                        <td><?php echo $row['sup_email']; ?></td>
                                        <td><?php echo $row['sup_state']; ?></td>
                                        <td><?php echo $row['sup_city']; ?></td>
                                    </tbody>
                                </table>

                                <h4>Faculty Mentor</h4>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form action="create_pdf.php" method="post" style="padding-bottom: 10%; margin-left: 45%;">
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