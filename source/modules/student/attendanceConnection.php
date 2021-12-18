<?php
$forms_db = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
if (!empty($_POST['submit'])) {
    $name_of_org = $_POST['name_of_org'];
   
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
    
    
    $forms_query = "INSERT INTO `attendance_internship`(`name_of_org`, `address_of_org`, `stud_name`, `att_rno`, `name_of_course`, `comm_date`,
     `comp_date`, `att_date`, `attendance`, `authority_name`, `authority_number`)VALUES 
     ('$name_of_org','$address_of_org','$stud_name','$att_rno','$name_of_course','$comm_date','$comp_date','$att_date','$attendance','$authority_name','$authority_number')";


    // $forms_query = "INSERT INTO `supervisor_evaluation`(`sr_no`, `stud_name`, `work_supervisor`, `supervisor_email`, 
    // `cmpny_name`, `internship_address`, `date_start`, `end_date`, `title`, `paid_status`, `one`, `two`, `three`, `four`, 
    // `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`,
    //  `seventeen`, `stud_rating`, `additional_comment`) VALUES ('1','[value-2]','[value-3]','[value-4]','[value-5]'
    //  ,'[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]',
    //  '[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]','[value-22]','[value-23]',
    //  '[value-24]','[value-25]','[value-26]','[value-27]','[value-28]','[value-29]')";


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