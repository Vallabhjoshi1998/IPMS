<?php
include_once '../utility/dbconfig.php';

if (!empty($_POST['save'])) {

	$username = $_POST['username'];
	$password = $_POST['pass'];

	$query = "select * from supervisor_login where username ='$username' and pass = '$password'";

	$result = mysqli_query($connect, $query);
	$count = mysqli_num_rows($result);

	if ($count > 0) {
		session_start();
		$_SESSION['username'] = $username;

		header("Location:../supervisor/supervisor_dash.php");   # Temporary admin dashboard (In future we have to implement the student dashboard)
		exit();
	} else {
?>
		<script>
			alert("WRONG PASSWORD ! Please try again...");
			window.location.href = "supervisor_login.php";
		</script>
<?php
	}
}
?>