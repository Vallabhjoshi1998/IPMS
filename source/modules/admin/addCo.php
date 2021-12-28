<?php
session_start();
include 'admin_dash_header.php';
?>
<div class="title" style="font-size:40px; text-align:center">Add T&P Co-ordinator</div>

<br>
<div class="form">

    <br>
    <br>
    <br>
    <br>
    <br>


    <br>
    <form action="AddCoConnection.php" method="POST">
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
            <input type="submit" name="save" class="btn btn-block create-account" value="Add Co-ordinator">
        </div>
    </form>
</div>
<?php
include 'admin_dash_footer.php';
?>