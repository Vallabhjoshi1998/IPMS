<?php

include_once '../utility/dbconfig.php';
if (!empty($_GET['save'])) {
	$username = $_GET['username'];
	$password = $_GET['pass'];
	$query = "select * from login_details where email_id ='$username' and pass = '$password'";
	$result = mysqli_query($connect, $query);
	$count = mysqli_num_rows($result);
	if ($count > 0) {
		session_start();
		$_SESSION['username'] = $username;
		header("Location:../student/student_dash.php");   # Temporary admin dashboard (In future we have to implement the student dashboard)
		exit();
	} else {
	?>

		<script>
			alert("WRONG PASSWORD ! Please try again...");
			window.location.href = "student_login.php";
		</script>
		<?php

	}
	
}

?>