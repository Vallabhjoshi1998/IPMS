<?php
$connectDb = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
if(!empty($_POST['save'])){
    $email_id = $_POST['email_id'];
    $admission = $_POST['admission'];
    $sgpa1 = $_POST['sgpa1'];
    $sgpa2 = $_POST['sgpa2'];
    $sgpa3 = $_POST['sgpa3'];
    $sgpa4 = $_POST['sgpa4'];
    $sgpa5 = $_POST['sgpa5'];
    $sgpa6 = $_POST['sgpa6'];
    $sgpa7 = $_POST['sgpa7'];
    $sgpa8 = $_POST['sgpa8'];
    $avgSgpa = $_POST['avgSgpa'];
    $passout = $_POST['passout'];
    $live = $_POST['live'];
    $dead = $_POST['dead'];

    if($admission)
    {
        $edit = "UPDATE info SET admission = '$admission' WHERE email_id = '$email_id'";
        $edit_res = mysqli_query($connectDb, $edit);
    }
    if($sgpa1)
    {
        $edit = "UPDATE info SET sgpa1 = '$sgpa1' WHERE email_id = '$email_id'";
        $edit_res = mysqli_query($connectDb, $edit);
    }
    if($sgpa2)
    {
        $edit = "UPDATE info SET sgpa2 = '$sgpa2' WHERE email_id = '$email_id'";
        $edit_res = mysqli_query($connectDb, $edit);
    }
    if($sgpa3)
    {
        $edit = "UPDATE info SET sgpa3 = '$sgpa3' WHERE email_id = '$email_id'";
        $edit_res = mysqli_query($connectDb, $edit);
    }
    if($sgpa4)
    {
        $edit = "UPDATE info SET sgpa4 = '$sgpa4' WHERE email_id = '$email_id'";
        $edit_res = mysqli_query($connectDb, $edit);
    }
    if($sgpa5)
    {
        $edit = "UPDATE info SET sgpa5 = '$sgpa5' WHERE email_id = '$email_id'";
        $edit_res = mysqli_query($connectDb, $edit);
    }
    if($sgpa6)
    {
        $edit = "UPDATE info SET sgpa6 = '$sgpa6' WHERE email_id = '$email_id'";
        $edit_res = mysqli_query($connectDb, $edit);
    }
    if($sgpa7)
    {
        $edit = "UPDATE info SET sgpa7 = '$sgpa7' WHERE email_id = '$email_id'";
        $edit_res = mysqli_query($connectDb, $edit);
    }
    if($sgpa8)
    {
        $edit = "UPDATE info SET sgpa8 = '$sgpa8' WHERE email_id = '$email_id'";
        $edit_res = mysqli_query($connectDb, $edit);
    }
    if($avgSgpa)
    {
        $edit = "UPDATE info SET avgSgpa = '$avgSgpa' WHERE email_id = '$email_id'";
        $edit_res = mysqli_query($connectDb, $edit);
    }
    if($live)
    {
        $edit = "UPDATE info SET live = '$live' WHERE email_id = '$email_id'";
        $edit_res = mysqli_query($connectDb, $edit);
    }
    if($dead)
    {
        $edit = "UPDATE info SET dead = '$dead' WHERE email_id = '$email_id'";
        $edit_res = mysqli_query($connectDb, $edit);
    }
    if($passout)
    {
        $edit = "UPDATE info SET passout = '$passout' WHERE email_id = '$email_id'";
        $edit_res = mysqli_query($connectDb, $edit);
    }
    header("Location:profile.php");


}
?>