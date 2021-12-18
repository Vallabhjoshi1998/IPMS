<?php
$forms_db = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
if (!empty($_POST['submit'])) {
    $stud_name = $_POST['stud_name'];
    $work_supervisor = $_POST['work_supervisor'];
    $sup_email = $_POST['sup_email'];
    $companyName = $_POST['companyName'];
    $internship_address = $_POST['internship_address'];
    $faculty_coordinator = $_POST['faculty_coordinator'];
    $f_date = $_POST['f_date'];
    $paid = $_POST['paid'];
    $department = $_POST['department'];    
       
    $one = $_POST['one'];
    $two = $_POST['two'];
    $three = $_POST['three'];
    $four = $_POST['four'];
    $five = $_POST['five'];
    $six = $_POST['six'];
    $seven = $_POST['seven'];
    $eight = $_POST['eight'];
    $nine = $_POST['nine'];
    $ten = $_POST['ten'];
    $eleven = $_POST['eleven'];
    $twelve = $_POST['twelve'];
    $thirteen = $_POST['thirteen'];
    $fourteen = $_POST['fourteen'];
    $fifteen = $_POST['fifteen'];

    $que1 = $_POST['que1'];
    $que2 = $_POST['que2'];
    $que3 = $_POST['que3'];
    $que4 = $_POST['que4'];
    $que5 = $_POST['que5'];
    $rating = $_POST['rating'];
    $que6 = $_POST['que6'];
    

    
    $forms_query = "INSERT INTO `student_feedback`(`stud_name`, `work_supervisor`, `sup_email`, `companyName`,
     `internship_address`, `faculty_coordinator`, `f_date`, `paid`, `department`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`,
     `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `que1`, `que2`, `que3`, `que4`, `que5`, `rating`, `que6`) VALUES
     ('$stud_name','$work_supervisor','$sup_email','$companyName','$internship_address','$faculty_coordinator','$f_date','$paid','$department','$one','$two',
    '$three','$four','$five','$six','$seven','$eight','$nine','$ten','$eleven','$two',
    '$thirteen','$fourteen','$fifteen','$que1','$que2','$que3','$que4','$que5','$rating','$que6')";





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