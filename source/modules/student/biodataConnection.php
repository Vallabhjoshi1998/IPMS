<?php
$conn = mysqli_connect("localhost", "root", "", "ipms");
if (isset($_POST['save'])) {
    $sql = "SELECT * FROM biodata WHERE stud_eno = '" . $_POST["stud_eno"] . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo '<script language="javascript">';
        echo 'alert("You have already filled up this form!"); location.href="biodata.php"';
        echo '</script>';
        exit();
    } else {
        $stud_name = $_POST['stud_name'];
        $stud_eno = $_POST['stud_eno'];
        $stud_email = $_POST['stud_email'];
        $stud_phone = $_POST['stud_phone'];
        $stud_cAddresss = $_POST['stud_cAddresss'];
        $stud_year = $_POST['stud_year'];
        $stud_state = $_POST['stud_state'];
        $stud_city = $_POST['stud_city'];
        $sup_name = $_POST['sup_name'];
        $sup_title = $_POST['sup_title'];
        $sup_email = $_POST['sup_email'];
        $sup_phone = $_POST['sup_phone'];
        $sup_org = $_POST['sup_org'];
        $ic_addresss = $_POST['ic_addresss'];
        $sup_state = $_POST['sup_state'];
        $sup_city = $_POST['sup_city'];
        $fac_name = $_POST['fac_name'];
        $fac_addresss = $_POST['fac_addresss'];
        $fac_phone = $_POST['fac_phone'];
        $ac_Departmen = $_POST['ac_Departmen'];
        $ac_title = $_POST['ac_ititle'];
        $ac_begdate = $_POST['ac_begdate'];
        $ac_enddate = $_POST['ac_enddate'];
        $ac_credit = $_POST['ac_credit'];
        $ac_hpw = $_POST['ac_hpw'];
        $bpaid = $_POST['bpaid'];
        $sem = $_POST['sem'];
        $semdept = $_POST['semdept'];
        $sembegdate = $_POST['sembegdate'];
        $sem_enddate = $_POST['sem_enddate'];

        $sql = "INSERT INTO `biodata`(`srNo`, `stud_name`, `stud_eno`, `stud_year`, `stud_cAddresss`, `stud_phone`, `stud_email`, `stud_state`, `stud_city`, `sup_name`, 
    `sup_title`, `sup_org`, `ic_addresss`, `sup_phone`, `sup_email`, `sup_state`, `sup_city`, `fac_name`, `fac_addresss`, `fac_phone`, `ac_Departmen`, `ac_ititle`, 
    `ac_begdate`, `ac_enddate`, `ac_credit`, `ac_hpw`, `bpaid`, `sem`, `semdept`, `sembegdate`, `sem_enddate`) 
    VALUES 
    ('-','$stud_name','$stud_eno','$stud_year','$stud_cAddresss','$stud_phone','$stud_email','$stud_state','$stud_city','$sup_name','$sup_title','$sup_org',
    '$ic_addresss','$sup_phone','$sup_email','$sup_state','$sup_city','$fac_name','$fac_addresss','$fac_phone','$ac_Departmen','$ac_title','$ac_begdate','$ac_enddate',
    '$ac_credit','$ac_hpw','$bpaid','$sem','$semdept','$sembegdate','$sem_enddate')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script language="javascript">';
            echo 'alert("Successfully Registered"); location.href="biodata.php"';
            echo '</script>';
            exit();
        } else {
            echo '<script language="javascript">';
            echo 'alert("Data Not Inserted! Please try again."); location.href="biodata.php"';
            echo '</script>';
            exit();
        }
    }
}
