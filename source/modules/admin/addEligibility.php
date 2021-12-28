<?php
include 'admin_dash_header.php';
?>
<form action="addProgressConnection.php" method="GET" enctype="multipart/form-data">
    <div class="input-container ic1">
        <input id="company_name" class="input" type="text" placeholder=" " name="company_name" value="<?php echo $selected 
                                                                                                        ?>" readonly>
    </div>
    <br>



    <input type="submit" name="save" class="submit" value="Add Progress">
</form>
<?php
include 'admin_dash_footer.php';
?>