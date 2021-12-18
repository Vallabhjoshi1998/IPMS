<?php
session_start();
include 'student_dash_header.php';
?>
<h3 style="text-align: center;">Edit Educational Details</h3>
<div>
    
    <form action="editDetailsConnection.php" method="POST">
        <br>
        <div class="form-icon">
            <span><i class="icon icon-user"></i></span>
        </div>

        <div class="form-group" style="width: 24%; margin-left: 38%">
        <h6>Email Id</h6>
            <input type="text" name="email_id" class="form-control item" id="email_id" value="<?php echo $username ?>" readonly>
        </div>

        <div class="form-group">
            <input type="text" name="admission" class="form-control item" id="admission" placeholder="Engineering Admission Year">
        </div>

        <div class="form-group">
            <input type="text" name="sgpa1" class="form-control item" id="sgpa1" placeholder="1st Semester SGPA">
        </div>

        <div class="form-group">
            <input type="text" name="sgpa2" class="form-control item" id="sgpa2" placeholder="2nd Semester SGPA">
        </div>

        <div class="form-group">
            <input type="text" name="sgpa3" class="form-control item" id="sgpa3" placeholder="3rd Semester SGPA">
        </div>

        <div class="form-group">
            <input type="text" name="sgpa4" class="form-control item" id="sgpa4" placeholder="4th Semester SGPA">
        </div>

        <div class="form-group">
            <input type="text" name="sgpa5" class="form-control item" id="sgpa5" placeholder="5th Semester SGPA">
        </div>

        <div class="form-group">
            <input type="text" name="sgpa6" class="form-control item" id="sgpa6" placeholder="6th Semester SGPA">
        </div>

        <div class="form-group">
            <input type="text" name="sgpa7" class="form-control item" id="sgpa7" placeholder="7th Semester SGPA">
        </div>

        <div class="form-group">
            <input type="text" name="sgpa8" class="form-control item" id="sgpa8" placeholder="8th Semester SGPA">
        </div>

        <div class="form-group">
            <input type="text" name="avgSgpa" class="form-control item" id="avgSgpa" placeholder="Average SGPA">
        </div>

        <div class="form-group">
            <input type="text" name="passout" class="form-control item" id="passout" placeholder="Passout Year">
        </div>

        <div class="form-group">
            <input type="text" name="live" class="form-control item" id="live" placeholder="Live Backlog">
        </div>

        <div class="form-group">
            <input type="text" name="dead" class="form-control item" id="dead" placeholder="Dead Backlog">
        </div>

        


        <div class="submit" style="width: 50%; margin-left: 25%">
            <input type="submit" name="save" class="btn btn-block create-account" value="Update Details">
        </div>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>

<?php
include 'student_dash_footer.php';
?>