<?php

include 'student_dash_header.php';

$connectDb = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
$offer = "SELECT fname, lname, regNo FROM info WHERE email_id ='$username'";
$off_res = mysqli_query($connect, $offer);
$off = mysqli_fetch_assoc($off_res);

$regNo = $off['regNo'];
$email_id = $username;

if (!empty($_GET['save'])) {
    $company_name = $_GET['company_name'];

?>
    <div class="title" style="font-size:40px; text-align:center">Upload Offer Letter</div>

    <br>
    <form action="uploadOfferConnection.php" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <input type="text" name="regNo" class="form-control item" id="regNo" value="<?php echo $regNo ?>" readonly>
        </div>

        <div class="form-group">
            <input type="email" name="email_id" class="form-control item" id="email_id" value="<?php echo $email_id ?>" readonly>
        </div>

        <div class="form-group">
            <input type="text" name="company_name" class="form-control item" id="company_name" value="<?php echo $company_name ?>" readonly>
        </div>
        <br>
        <div style="margin-left: 42%;">
            <input type="file" name="offer_letter" id="offer_letter"><br><br>
        </div>
        <div style="margin-left: 46%;">
            <input type="submit" value="Upload" name="submit">
        </div>
        <!-- <div class="submit" style="width: 30%; align-items: center; margin-left: 35%;">
            <input type="submit" name="save" class="btn btn-block create-account" value="Upload">
            
       
        </div> -->

    </form>
<?php
}

include 'student_dash_footer.php';

?>