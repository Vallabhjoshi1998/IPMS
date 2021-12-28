<?php
    include '../utility/dbconfig.php';

if(!empty($_GET['save'])){
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
	$email_id=$_GET['email_id'];
    $branch = $_GET['branch'];
    $batch = $_GET['batch'];
	$company_name=$_GET['company_name'];
    $sal_lpa = $_GET['sal'];
	$query = "INSERT INTO placement_data(fname, lname, email_id, branch, batch, company_name, sal_lpa) VALUES ('$fname','$lname','$email_id','$branch','$batch','$company_name','$sal_lpa')";
	$result = mysqli_query($connect,$query);
	if($result){
        header("Location:add_placement_details.php");
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