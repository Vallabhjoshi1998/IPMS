<?php
$forms_db = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
if (!empty($_POST['save'])) {
    $stud_name = $_POST['stud_name'];
    $work_supervisor = $_POST['work_supervisor'];
    $supervisor_email = $_POST['supervisor_email'];
    $cmpny_name = $_POST['cmpny_name'];
    $internship_address = $_POST['internship_address'];

    $date_start = $_POST['date_start'];
    $end_date = $_POST['end_date'];
    
    $title = $_POST['title'];

    //radio button paid/unpaid
    $paid_status = $_POST['paid_status'];

    //radio_button values
    $one = $_POST['one'];
    $two = $_POST['two'];
    $three = $_POST['three'];
    $four = $_POST['four'];
    $five = $_POST['five'];
    $six = $_POST['six'];
    $seven = $_POST['seven'];
    $eight = $_POST['eight'];
    $nine  = $_POST['nine'];
    $ten = $_POST['ten'];
    $eleven = $_POST['eleven'];
    $twelve = $_POST['twelve'];
    $thirteen = $_POST['thirteen'];
    $fourteen = $_POST['fourteen'];
    $fifteen = $_POST['fifteen'];
    $sixteen = $_POST['sixteen'];
    $seventeen = $_POST['seventeen'];

    $stud_rating = $_POST['stud_rating'];
    $additional_comment = $_POST['additional_comment'];


    $forms_query = "INSERT INTO `supervisor_evaluation`(`sr_no`, `stud_name`, `work_supervisor`, `supervisor_email`,
     `cmpny_name`, `internship_address`, `date_start`, `end_date`, `title`, `paid_status`, `one`, `two`, `three`, `four`, 
     `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`,
      `seventeen`, `stud_rating`, `additional_comment`)
       VALUES 
       ('1','$stud_name','$work_supervisor','$supervisor_email','$cmpny_name'
      ,'$internship_address','$date_start','$end_date','$title','$paid_status','$one','$two','$three','$four',
      '$five','$six','$seven','$eight','$nine','$ten','$eleven','$twelve','$thirteen',
      '$fourteen','$fifteen','$sixteen','$seventeen','$stud_rating','$additional_comment')";


    // $forms_query = "INSERT INTO `supervisor_evaluation`(`sr_no`, `stud_name`, `work_supervisor`, `supervisor_email`, 
    // `cmpny_name`, `internship_address`, `date_start`, `end_date`, `title`, `paid_status`, `one`, `two`, `three`, `four`, 
    // `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`,
    //  `seventeen`, `stud_rating`, `additional_comment`) VALUES ('1','[value-2]','[value-3]','[value-4]','[value-5]'
    //  ,'[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]',
    //  '[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]','[value-22]','[value-23]',
    //  '[value-24]','[value-25]','[value-26]','[value-27]','[value-28]','[value-29]')";


    $forms_result = mysqli_query($forms_db, $forms_query);
    if ($forms_result) {
        header("Location:admin_dash.php");
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