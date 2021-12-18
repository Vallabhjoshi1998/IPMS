<?php
    include '../utility/dbconfig.php';
   

if(!empty($_POST['save'])){
    $alert_date = $_POST['alert_date'];
    $alert = $_POST['alert'];
	$query = "INSERT INTO `alert`(`alert_date`, `alert`) VALUES ('$alert_date','$alert')";
	$result = mysqli_query($connect,$query);
	if($result){
        header("Location:addNotification.php");
        exit();
    }
}
?>
<script type="text/javascript">
    alert("Successfully added");
</script>
<?php
mysqli_close($connect);
?>

