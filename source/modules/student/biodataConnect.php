<?php
$forms_db = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
if (!empty($_POST['submit'])) {
    $stud_name = $_POST['stud_name'];
   
    $stud_eno = $_POST['stud_eno'];
    $stud_year = $_POST['stud_year'];
    $stud_cAddresss = $_POST['stud_cAddresss'];
    $stud_phone = $_POST['stud_phone'];

    $stud_email = $_POST['stud_email'];
    $stud_state = $_POST['stud_state'];
    
    $stud_city = $_POST['stud_city'];

    
    $sup_name = $_POST['sup_name'];

    
    $sup_title = $_POST['sup_title'];
    $sup_org = $_POST['sup_org'];
    $ic_addresss = $_POST['ic_addresss'];
    $sup_phone = $_POST['sup_phone'];
    $sup_email = $_POST['sup_email'];
    $sup_state = $_POST['sup_state'];
    $sup_city = $_POST['sup_city'];
    $fac_name = $_POST['fac_name'];
    $fac_addresss = $_POST['fac_addresss'];

    $fac_phone = $_POST['fac_phone'];
    $ac_Departmen = $_POST['ac_Departmen'];
    $ac_ititle = $_POST['ac_ititle'];
    $ac_begdate = $_POST['ac_begdate'];
    $ac_enddate = $_POST['ac_enddate'];
    
    $ac_credit = $_POST['ac_credit'];
    $ac_hpw = $_POST['ac_hpw'];
    $bpaid = $_POST['bpaid'];
    $sem = $_POST['sem'];
    $semdept = $_POST['dept'];
    $sembegdate = $_POST['sembegdate'];
    $sem_enddate = $_POST['sem_enddate'];
    
    
    
    $forms_query = "INSERT INTO `biodata`(`stud_name`, `stud_eno`, `stud_year`, `stud_cAddresss`,
     `stud_phone`, `stud_email`, `stud_state`, `stud_city`, `sup_name`, `sup_title`, `sup_org`, `ic_addresss`, `sup_phone`, `sup_email`, `sup_state`, `sup_city`, `fac_name`,
     `fac_addresss`, `fac_phone`, `ac_Departmen`, `ac_ititle`, `ac_begdate`, `ac_enddate`, `ac_credit`, `ac_hpw`, `bpaid`, `sem`, `semdept`, `sembegdate`, `sem_enddate`) 
    VALUES ('$stud_name','$stud_eno','$stud_year','$stud_cAddresss',
    '$stud_phone','$stud_email','$stud_state','$stud_city','$sup_name','$sup_title','$sup_org','$ic_addresss','$sup_phone','$sup_email','$sup_state','$sup_city','$fac_name',
    '$fac_addresss','$fac_phone','$ac_Departmen','$ac_ititle','$ac_begdate','$ac_enddate','$ac_credit','$ac_hpw','$bpaid','$sem','$semdept','$sembegdate','$sem_enddate')";


   

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