<?php
// If upload button is clicked ...
if (isset($_POST['save'])) {

		
	$db = mysqli_connect("localhost", "root", "", "ipms");

        $company_name = $_POST['company_name'];
        $el_criteria = $_POST['el_criteria'];
        $date_start = $_POST['date_start'];
        $duartion = $_POST['duration'];
        $reg_link = $_POST['reg_link'];

		
		$sql = "INSERT INTO internship_opportunities(company_name, el_criteria, date_start, duration, reg_link) VALUES ('$company_name','$el_criteria','$date_start','$duartion','$reg_link')";

		
		$res = mysqli_query($db, $sql);

	if($res){
        header("Location:add_internship_oppurtunities.php");
        exit();
    }
}		
?>
<script type="text/javascript">
    alert("Successfully added");
</script>
<?php
mysqli_close($db);
?>
