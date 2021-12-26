<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPMS - Check Feedback Data</title>
</head>

<body>
    <?php
    session_start();
    include 'admin_dash_header.php';
    ?>
    <div class="title" style="font-size:40px; text-align:center">See Feedback Form Data</div>

    <br>
    <div class="form">

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <form action="stud_feedback.php" method="POST">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" name="reg_no" class="form-control item" id="regNo" placeholder="Enter Registration Number">
            </div>
            <br>
            <br>
            <br>
            <div class="submit">
                <input type="submit" name="save" class="btn btn-block create-account" value="View Profile">
            </div>
        </form>
    </div>
    <?php
    include 'admin_dash_footer.php';
    ?>
</body>

</html>