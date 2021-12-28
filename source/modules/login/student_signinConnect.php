<?php

if(!session_start()){
	session_start();
}

include_once '../utility/dbconfig.php';
if (!empty($_GET['save'])) {
	$username = $_GET['username'];
	$_SESSION['username'] = $username;
	$password = $_GET['pass'];
	$query = "SELECT * FROM login_details WHERE email_id ='$username' AND pass = '$password'";
	$result = mysqli_query($connect, $query);
	$count = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	$ac_type = $row['ac_type'];
	if ($count > 0) {
		// if($ac_type == 'Regular'){
		session_start();
		$_SESSION['username'] = $username;
		header("Location:../student/student_dash.php");   
		exit();
	// }
	// else{
	// 	session_start();
	// 	$_SESSION['username'] = $username;
	// 	header("Location:../student/coordinator_dash.php");   
	// 	exit();
	// }
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