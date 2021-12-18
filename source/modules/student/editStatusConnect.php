<?php
$connectDb = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
if(!empty($_POST['save']))
{
    $email_id = $_POST['email_id'];
    $placement_status = $_POST['placement_status'];
    if($placement_status){
        $edit = "UPDATE info SET placement_status = '$placement_status' WHERE email_id = '$email_id'";
        $edit_res = mysqli_query($connectDb, $edit);
    }
    header("Location:profile.php");
}
?>