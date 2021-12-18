<?php
session_start();
$username = $_SESSION["username"];
include 'student_dash_header.php';
$intern = "SELECT * FROM info WHERE email_id = '$username'";
$resIntern = mysqli_query($connect, $intern);
$row_name = mysqli_fetch_array($resIntern);

?>
<div class="title" style="font-size:40px; text-align:center">Add Internships</div>

<br>
<div class="form">

    <br>
    <form action="student_add_internship_connection.php" method="GET">
        <div class="form-icon">
            <span><i class="icon icon-user"></i></span>
        </div>
        <div class="form-group">
            <input type="text" name="fname" class="form-control item" id="fname" value="<?php echo $row_name['fname'] ?>" readonly>
        </div>

        <div class="form-group">
            <input type="text" name="lname" class="form-control item" id="lname" value="<?php echo $row_name['lname'] ?>" readonly>
        </div>

        <div class="form-group">
            <input type="email" name="email_id" class="form-control item" id="email_id" value="<?php echo $row_name['email_id'] ?>" readonly>
        </div>

        <div class="form-group">
            <input type="text" name="company_name" class="form-control item" id="company_name" placeholder="Company Name">
        </div>

        <div class="form-group">
            <label>Enter Start Date</label>
            <input type="date" name="start_date" class="form-control item" id="start_date" placeholder="Enter Start Date" value="Enter Start Date">
        </div>

        <div class="form-group">
            <label>Enter End Date</label>
            <input type="date" name="end_date" class="form-control item" id="end_date" placeholder="Enter End Date" value="Enter End Date">
        </div>


        <div class="submit">
            <input type="submit" name="save" class="btn btn-block create-account" value="Add Details">
        </div>
    </form>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php
include 'student_dash_footer.php';
?>