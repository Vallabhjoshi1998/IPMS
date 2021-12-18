<?php
include_once '../utility/dbconfig.php';
// session_start();
if (!isset($_SESSION)) {
    session_start();
}
include 'admin_dash_header.php';
?>

<form action="" method="POST" style="margin-left: 35%;" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="subject" placeholder="Subject" required>
    </div>
    <div class="form-group">
        <input type="email" name="email_trig" placeholder="Email Id" required>
    </div>
    <div class="form-group">
        <textarea style="border: 2px solid #6495ED;border-radius: 4px;text-align: center;margin-right: auto;margin-left: auto;line-height: 23px;
    width: 300px;" type="text" name="message" placeholder="Message" required></textarea>
    </div>
    <div class="form-group">
        <input type="file" name="inputfile" id="file" class="inputfile" />
    </div>
    <br>
    <div class="submit" style=" width: 39%; margin-left: 12%">
        <input style="width: 50%;" type="submit" name="trigger_mail" class="btn btn-block create-account" value="Trigger Mails">
    </div>
</form>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('../../../PHPMailer/Exception.php');
require('../../../PHPMailer/PHPMailer.php');
require('../../../PHPMailer/SMTP.php');

if (isset($_POST['trigger_mail'])) {
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email_trig = $_POST['email_trig'];

    if (array_key_exists('inputfile', $_FILES)) {
        $ext = PHPMailer::mb_pathinfo($_FILES['inputfile']['name'], PATHINFO_EXTENSION);
        $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['inputfile']['name'])) . '.' . $ext;
    }

    $mail = new PHPMailer(true);

    $msg = "";
    try {
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'ycceittnpof@gmail.com';                  
        $mail->Password   = 'Placements';                              
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
        $mail->Port       = 465;                                    

        //Recipients
        $mail->setFrom('ycceittnpof@gmail.com', 'T&P IT Department');
        $mail->addAddress($email_trig);
        $mail->isHTML(true);
        $mail->Subject = "$subject";
        $mail->Body    = "$message";

        if (move_uploaded_file($_FILES['inputfile']['tmp_name'], $uploadfile)) {
            if (!$mail->addAttachment($uploadfile, 'My uploaded file')) {
                $msg .= 'Failed to attach file ' . $_FILES['inputfile']['name'];
            }
            if (!$mail->send()) {
                $msg .= 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                $msg .= 'Message sent!';
            }
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
        echo '<script>alert("Message has been sent")</script>';
    } catch (Exception $e) {
        echo '<script>alert("Message could not be sent. Mailer Error: {$mail->ErrorInfo}")</script>';
    }
}

?>

<?php
include 'admin_dash_footer.php';
?>

Message could not be sent. Mailer Error: {$mail->ErrorInfo}