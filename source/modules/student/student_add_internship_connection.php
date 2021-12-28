<?php
$connectDb = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
if(!empty($_GET['save'])){
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
	$email_id=$_GET['email_id'];
    $batch=$_GET['batch'];
	$company_name=$_GET['company_name'];
    $start_date = $_GET['start_date'];
    $end_date = $_GET['end_date'];
	$query = "INSERT INTO internship_data(fname, lname, email_id, batch, company_name, start_date, end_date) VALUES ('$fname','$lname','$email_id','$batch','$company_name','$start_date','$end_date')";
	$result = mysqli_query($connectDb,$query);
	if($result){
        header("Location:student_dash.php");
        exit();
    }
}
?>
<script type="text/javascript">
    alert("Successfully added");
</script>
<?php
mysqli_close($connectDb);
?>