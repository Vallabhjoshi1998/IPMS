<?php
$connect_info = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
if(!empty($_POST['save'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
	$email_id=$_POST['email_id'];
    $mobNo=$_POST['mobNo'];
    $par_mobNo=$_POST['par_mobNo'];
	$dept=$_POST['dept'];
    $sem=$_POST['sem'];
    $regNo=$_POST['regNo'];
    $pass10=$_POST['pass10'];
    $per10=$_POST['per10'];
    $pass12=$_POST['pass12'];
    $per12=$_POST['per12'];
    $passDip=$_POST['passDip'];
    $perDip=$_POST['perDip'];
    $admission=$_POST['admission'];
    $sgpa1=$_POST['sgpa1'];
    $sgpa2=$_POST['sgpa2'];
    $sgpa3=$_POST['sgpa3'];
    $sgpa4=$_POST['sgpa4'];
    $sgpa5=$_POST['sgpa5'];
    $sgpa6=$_POST['sgpa6'];
    $sgpa7=$_POST['sgpa7'];
    $sgpa8=$_POST['sgpa8'];
    $avgSgpa=$_POST['avgSgpa'];
    $passout=$_POST['passout'];
    $live=$_POST['live'];
    $dead=$_POST['dead'];
    $option1=$_POST['option1'];
    $placement_status=$_POST['placement_status'];
    
    $gap=$passout - $pass10;





	$quer_info = "INSERT INTO info(fname, lname, email_id, mobNo, par_mobNo, dept, sem, regNo, pass10, per10, pass12, per12, passDip, perDip, admission, sgpa1, sgpa2, sgpa3, sgpa4, sgpa5, sgpa6, sgpa7, sgpa8, avgSgpa, passout, live, dead, option1, placement_status, gap) VALUES ('$fname','$lname','$email_id','$mobNo','$par_mobNo','$dept','$sem','$regNo','$pass10','$per10','$pass12','$per12','$passDip','$perDip','$admission','$sgpa1','$sgpa2','$sgpa3','$sgpa4','$sgpa5','$sgpa6','$sgpa7','$sgpa8','$avgSgpa','$passout','$live','$dead','$option1','$placement_status','$gap')";


	$result_info = mysqli_query($connect_info,$quer_info);

	if($result_info){
        header("Location:./student_login.php");
        exit();
    }
    else{

?>
    <script>
			alert("User already exist ! Try to login...");
			window.location.href = "./addInfo.php";
		</script>
<?php
    }
}
?>
<script type="text/javascript">
    alert("Successfully added");
</script>
<?php
mysqli_close($connect_info);
?>