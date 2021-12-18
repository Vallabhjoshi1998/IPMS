<?php
$forms_db = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
if (!empty($_POST['submit'])) {
    $week = $_POST['week'];

    $diary_dept = $_POST['diary_dept'];

    $diary_sem = $_POST['diary_sem'];

    $pname = $_POST['pname'];

    $diary_date_start = $_POST['diary_date_start'];

    $diary_date_end = $_POST['diary_date_end'];

    $hod_name = $_POST['hod_name'];

    $message = $_POST['message'];
 
    $your_name = $_POST['your_name'];    
    $institute_name = $_POST['institute_name'];
    $comp_name = $_POST['comp_name'];
    $diary_date_from = $_POST['diary_date_from'];
    $diary_date_to = $_POST['diary_date_to'];
    $que1 = $_POST['que1'];
    $que2 = $_POST['que2'];
    $que3 = $_POST['que3'];
    $que4 = $_POST['que4'];
    $que5 = $_POST['que5'];
    $que6 = $_POST['que6'];
    $que7 = $_POST['que7'];
    $que8 = $_POST['que8'];
    $que9 = $_POST['que9'];
    $que10 = $_POST['que10'];
    $que11 = $_POST['que11'];
    $que12 = $_POST['que12'];
    $que13 = $_POST['que13'];
    
    $forms_query = "INSERT INTO `studentdiary`(`week`, `diary_dept`, `diary_sem`, `pname`, `diary_date_start`, `diary_date_end`, `hod_name`, `message`, `your_name`, `institute_name`, `comp_name`, `diary_date_from`, `diary_date_to`, `que1`, `que2`, `que3`, `que4`, `que5`, `que6`, `que7`, `que8`, `que9`, `que10`, `que11`, `que12`, `que13`) 
    VALUES ('$week','$diary_dept','$diary_sem','$pname',
    '$diary_date_start','$diary_date_end','$hod_name','$message','$your_name',
    '$institute_name','$comp_name','$diary_date_from','$diary_date_to','$que1','$que2',
    '$que3','$que4','$que5','$que6','$que7',
    '$que8','$que9','$que10','$que11','$que12','$que13')";





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