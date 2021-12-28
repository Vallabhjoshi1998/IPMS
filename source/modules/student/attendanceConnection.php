<?php
$forms_db = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
if (!empty($_POST['submit'])) {

    $name_of_org = $_POST['name_of_org'];
    $reg_no = $_POST['reg_no'];
   
    $address_of_org = $_POST['address_of_org'];
    $stud_name = $_POST['stud_name'];
    $att_rno = $_POST['att_rno'];
    $name_of_course = $_POST['name_of_course'];

    $comm_date = $_POST['comm_date'];
    $comp_date = $_POST['comp_date'];
    
    $att_date = $_POST['att_date'];

    
    $attendance = $_POST['attendance'];

    
    $authority_name = $_POST['authority_name'];
    $authority_number = $_POST['authority_number'];
    
    
    $forms_query = "INSERT INTO `attendance_internship`(`reg_no`,`name_of_org`, `address_of_org`, `stud_name`, `att_rno`, `name_of_course`, `comm_date`,
     `comp_date`, `att_date`, `attendance`, `authority_name`, `authority_number`)VALUES 
     ('$reg_no','$name_of_org','$address_of_org','$stud_name','$att_rno','$name_of_course','$comm_date','$comp_date','$att_date','$attendance','$authority_name','$authority_number')";


    $forms_result = mysqli_query($forms_db, $forms_query);
    if ($forms_result) {
        header("Location:student_dash.php");
        exit();
    }
}
?>
<script type="text/javascript">
    alert("Successfully added");
    //window.location.href = "admin_dash.php";
</script>
<?php
mysqli_close($forms_db);
?>