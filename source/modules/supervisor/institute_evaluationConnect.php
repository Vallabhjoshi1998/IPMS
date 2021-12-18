<?php
$forms_db = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
if (!empty($_POST['submit'])) {
    $stud_name = $_POST['stud_name'];
   
    $roll = $_POST['roll'];
    $branch = $_POST['branch'];
    $sem = $_POST['sem'];
    $h_addresss = $_POST['h_addresss'];

    $phone = $_POST['phone'];
    $eno = $_POST['eno'];
    
    $period = $_POST['period'];

    
    $t_addresss = $_POST['t_addresss'];

    
    $p_addresss = $_POST['p_addresss'];
    $name_t = $_POST['name_t'];
    $des_t = $_POST['des_t'];
    $type_work = $_POST['type_work'];
    $evdate = $_POST['evdate'];
    $att = $_POST['att'];
    $pw = $_POST['pw'];
    $fe = $_POST['fe'];
    $ei  = $_POST['ei'];
    $grade = $_POST['grade'];
    
    $forms_query = "INSERT INTO `institute_evaluation`(`stud_name`, `roll`, `branch`, `sem`, `h_addresss`, `phone`, `eno`, `period`, 
    `t_addresss`, `p_addresss`, `name_t`, `des_t`, `type_work`, `evdate`, `att`, `pw`, `fe`, `ei`, `grade`) 
    VALUES ('$stud_name','$roll','$branch','$sem','$h_addresss','$phone','$eno',
    '$period','$t_addresss','$p_addresss','$name_t','$des_t','$type_work ','$evdate','$att',
    '$pw','$fe','$ei','$grade')";


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