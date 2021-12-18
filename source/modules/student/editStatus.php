<?php
session_start();
include 'student_dash_header.php';
?>

<h3 style="text-align: center;">Update Placement Status</h3>
<form action="editStatusConnect.php" method="POST">
    <br>
    <br>
    <br>
    <br>

    <div class="form-group" style="width: 24%; margin-left: 38%">
        <h6>Email Id</h6>
        <input type="text" name="email_id" class="form-control item" id="email_id" value="<?php echo $username ?>" readonly>
    </div>
    <br>
    <br>
    <div style="text-align: center;">
        <label for="Placement">Placement Status</label></b><br>

        <label for="placed">Unplaced</label>
        <input type="radio" id="placed" name="placement_status" value="Unplaced">

        <label for="placed">Single Offer</label>
        <input type="radio" id="placed" name="placement_status" value="Single Offer">

        <label for="placed">Multiple Offers</label>
        <input type="radio" id="placed" name="placement_status" value="Multiple Offers">

        <br>
        <br>


        <div class="submit" style="width: 50%; margin-left: 25%">
            <input type="submit" name="save" class="btn btn-block create-account" value="Update Details">
        </div>

    </div>

</form>
<?php
include 'student_dash_footer.php';
?>