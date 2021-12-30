<?php
session_start();
include 'admin_dash_header.php';
?>
<div class="title" style="font-size:40px; text-align:center">Check Profile</div>

<br>
<div class="form">

    <br>
    <br>
    <br>
    <br>
    <br>
    

    <br>
    <form action="fetchProf.php" method="POST">
        <div class="form-icon">
            <span><i class="icon icon-user"></i></span>
        </div>
        <div class="form-group">
            <input type="text" name="regNo" class="form-control item" id="regNo" placeholder="Enter Registration Number">
        </div>
        <br>
    <br>
    <br>
        <div class="submit">
                <input style="width: 50%; margin-left: 25%;" type="submit" name="save" class="btn btn-block create-account" value="View Profile">
            </div>
    </form>
</div>
<?php
include 'admin_dash_footer.php';
?>