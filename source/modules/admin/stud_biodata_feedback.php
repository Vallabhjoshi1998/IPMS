<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPMS - Check Biodata</title>
</head>

<body>
    <?php
    session_start();
    include 'admin_dash_header.php';
    ?>
    <div class="title" style="font-size:40px; text-align:center">See Biodata</div>

    <br>
    <div class="form" style="padding: 50px; margin-bottom: 10%;">
        <form action="stud_biodata.php" method="POST" style="margin-top: 19%;">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input required type="text" name="reg_no" class="form-control item" id="regNo" placeholder="Enter Registration Number">
            </div>

            <div class="submit">
                <input style="width: 50%; margin-left: 25%;" type="submit" name="save" class="btn btn-block create-account" value="View Profile">
            </div>
        </form>
    </div>
    <?php
    include 'admin_dash_footer.php';
    ?>
</body>

</html>