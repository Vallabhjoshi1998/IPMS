<?php
    include '../utility/dbconfig.php';
   

if(!empty($_POST['save'])){
    $alert_id = $_POST['alert_id'];
	$query = "DELETE FROM alert WHERE alert_id= $alert_id";
	$result = mysqli_query($connect,$query);
	if($result){
        header("Location:admin_dash.php");
        exit();
    }
}
?>
<script type="text/javascript">
    alert("Successfully deleted");
</script>
<?php
mysqli_close($connect);
?>
