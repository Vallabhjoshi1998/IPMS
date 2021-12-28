<?php
session_start();


if (!empty($_POST['save'])) {
    $company_name = $_POST['company_name'];
    $batch = $_POST['batch'];

    
    $elig_dir = "../progress/eligibility_list";
    $elig_file = $elig_dir . basename($_FILES["eligibility"]["name"]);
    $uploadOk_elig = 1;
    $eligibility = $_FILES['eligibility']['name'];
    $elig_tmp = $_FILES['eligibility']['tmp_name'];

    $technical_dir = "../progress/technical/";
    $technical_file = $technical_dir . basename($_FILES["technical"]["name"]);
    $uploadOk_technical = 1;
    $technical = $_FILES['technical']['name'];
    $technical_tmp = $_FILES['technical']['tmp_name'];

    $HR_dir = "../progress/HR/";
    $HR_file = $HR_dir . basename($_FILES["HR"]["name"]);
    $uploadOk_HR = 1;
    $HR = $_FILES['HR']['name'];
    $HR_tmp = $_FILES['HR']['tmp_name'];

    
    $final_dir = "../progress/final_selections/";
    $final_file = $final_dir . basename($_FILES["final"]["name"]);
    $uploadOk_final = 1;
    $final = $_FILES['final']['name'];
    $final_tmp = $_FILES['final']['tmp_name'];
    
    
    if ($eligibility == '' OR $technical == '' OR $HR == '' OR $final == '') {
        echo "<script>alert('Please Select file')</script>";
    }


    if ($uploadOk_elig == 0) {
        echo "<script>alert('Sorry file is not Uploaded !')</script>";
    } else {
        move_uploaded_file($elig_tmp, "../progress/eligibility_list/$eligibility");
        $path_elig = "$eligibility";
        echo "<script>alert('Your file is Successfully Uploaded!')</script>";

    }
  

    if ($uploadOk_technical == 0) {
        echo "<script>alert('Sorry your file is not Uploaded !')</script>";
    } else {
        move_uploaded_file($technical_tmp, "../progress/technical/$technical");
        $path_technical = "$technical";
        echo "<script>alert('Your file is Successfully Uploaded!')</script>";

    }


    if ($uploadOk_HR == 0) {
        echo "<script>alert('Sorry your file is not Uploaded !')</script>";
    } else {
        move_uploaded_file($HR_tmp, "../progress/HR/$HR");
        $path_HR = "$HR";
        echo "<script>alert('Your file is Successfully Uploaded!')</script>";

    }



    if ($uploadOk_final == 0) {
        echo "<script>alert('Sorry your file is not Uploaded !')</script>";
    } else {
        move_uploaded_file($final_tmp, "../progress/final_selections/$final");
        $path_final = "$final";
        echo "<script>alert('Your file is Successfully Uploaded!')</script>";

    }





    $db = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");

    $progress = "INSERT INTO `progress`(`company_name`, `batch`, `eligibility_list`, `technical`, `HR`, `final`) VALUES ('$company_name','$batch','$path_elig','$path_technical','$path_HR','$path_final')";
    $res_progress = mysqli_query($db, $progress);
    if($res_progress)
    {
        header("Location: display_current_drives.php");
    }
}
?>