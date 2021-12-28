<?php
include 'admin_dash_header.php';

if (!empty($_POST['save'])) {
    if (!empty($_POST['c_name'])) {
        $selected = $_POST['c_name'];


?>
<h4 style="text-align: center;">Add Progress for <?php echo $selected ?></h4>
        <form action="addProgressConnection.php" method="POST" enctype="multipart/form-data">
            <div style="margin-left: 38%;">
                <div class="input-container ic1">
                    <input id="company_name" class="input" type="text" placeholder=" " name="company_name" value="<?php echo $selected ?>" readonly>
                </div>
                <br>
                <div class="input-container ic1">
                    <input id="batch" class="input" type="text" placeholder=" " name="batch" value="<?php echo $batch ?>" readonly>
                </div>
                <br>
                <div>
                    <label for="eligibility">Eligibility List :</label>
                    <input type="file" name="eligibility" id="eligibility"><br>
                </div>
                <br>
                <div style="margin-left: -23%;">
                    <label for="technical">Shortlisted for Technical Interview List :</label>
                    <input type="file" name="technical" id="technical"><br>
                </div>
                <br>
                <div style="margin-left: -17.5%;">
                    <label for="HR">Shortlisted for HR Interview List :</label>
                    <input type="file" name="HR" id="HR"><br>
                </div>
                <br>
                <div style="margin-left: -1%;">
                    <label for="final">Final Selected :</label>
                    <input type="file" name="final" id="final"><br>
                </div>
                <br>


                <input type="submit" name="save" class="submit" value="Add Progress" style="margin-left: 12%;">
            </div>

        </form>

<?php
    }
}
include 'admin_dash_footer.php';
?>