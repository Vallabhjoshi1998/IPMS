<?php

session_start();
if (!empty($_POST['submit'])) {
    $regNo = $_POST['regNo'];
    $email_id = $_POST['email_id'];
    $company_name = $_POST['company_name'];

    $target_dir = "../offer_letters/";
    $target_file = $target_dir . basename($_FILES["offer_letter"]["name"]);
    $uploadOk = 1;
    $offer_letter = $_FILES['offer_letter']['name'];
    $offer_tmp = $_FILES['offer_letter']['tmp_name'];
    $imageFileType = strtolower(pathinfo($offer_letter, PATHINFO_EXTENSION));

    if ($offer_letter == '') {
        echo "<script>alert('Please Select Offer Letter')</script>";
    }


    if ($imageFileType != "pdf") {
        echo "<script>alert('Sorry, Only PDF files are allowed!')</script>";
        echo "<script>window.open('student_dash.php', '_self')</script>";
        exit();
    }

    if ($uploadOk == 0) {
        echo "<script>alert('Sorry your Offer Letter was not Uploaded !')</script>";
    } else {
        move_uploaded_file($offer_tmp, "../offer_letters/$offer_letter");
        $path = "$offer_letter";
        echo "<script>alert('Your Offer Letter was Successfull Uploaded!')</script>";

    }
}

$db = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
$offer = "INSERT INTO offerletter(regNo, email_id, company_name,source) VALUES ('$regNo','$email_id','$company_name','$path')";
$res_offer = mysqli_query($db, $offer);
if($res_offer){
    header("Location: ./student_dash.php");
}
?>