<?php
// If upload button is clicked ...
$dbCo = mysqli_connect("localhost", "root", "", "ipms");
if (isset($_POST['save'])) 
{
    $regNo = $_POST['regNo'];
}
$add = "SELECT * FROM info WHERE regNo = '$regNo'";
$res_add = mysqli_query($dbCo, $add);
$row_res = mysqli_fetch_array($res_add);

$email_id = $row_res['email_id'];

$change = "UPDATE `login_details` SET `ac_type`='STPC' WHERE email_id='$email_id'";
$resChange = mysqli_query($dbCo, $change);
if($resChange){
    header("Location: admin_dash.php");
}
else{
    ?>
    <script>
        alert("Can't be changed!")
    </script>
    <?php
}
?>
