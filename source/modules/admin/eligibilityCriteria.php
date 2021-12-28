<?php
session_start();
include 'admin_dash_header.php';
?>

<div>
    <form action="eligibilityConnect.php" method="POST">
        <div class="form-icon">
            <span><i class="icon icon-user"></i></span>
        </div>
        <br>
        <div class="form-group">
            <input type="text" name="company" class="form-control item" id="company" placeholder="Company Name">
        </div>

        <div class="form-group">
            <input type="text" name="batch" class="form-control item" id="batch" placeholder="" value="<?php echo $batch  ?>" readonly>
        </div>

        <div class="form-group">
            <input type="text" name="per10" class="form-control item" id="per10" placeholder="10th Percentage">
        </div>

        <div class="form-group">
            <input type="text" name="per12" class="form-control item" id="per12" placeholder="12th Percentage">
        </div>

        <div class="form-group">
            <input type="text" name="perDip" class="form-control item" id="perDip" placeholder="Diploma Percentage">
        </div>

        <div class="form-group">
            <input type="text" name="avgSgpa" class="form-control item" id="avgSgpa" placeholder="Average SGPA">
        </div>

        <div class="form-group">
            <input type="number" name="gap" class="form-control item" id="gap" placeholder="Education Gap" style="width: auto; text-align:center; margin-left: 41%;">
        </div>

        <div class="form-group" style="text-align: center;">
            <label for="backlog">Criteria for Backlog</label><br>
            <input type="radio" id="backlog" name="backlog" value="1" required>
            <label for="backlog">Live Backlog Allowed</label>
            <input type="radio" id="backlog" name="backlog" value="0" required>
            <label for="unplaced">No Live Backlog Allowed</label>
        </div>
        <div style="text-align: center;">
            <label for="place_stat">Allowed for</label><br>
            <input type="radio" id="placed" name="place_stat" value="Placed">
            <label for="placed">Placed</label>
            <input type="radio" id="placed" name="place_stat" value="Unplaced">
            <label for="unplaced">Unplaced</label>
            <input type="radio" id="placed" name="place_stat" value="Single Offer">
            <label for="unplaced">Single Offer</label>
        </div>
        <div class="submit" style=" width: 39%; margin-left: 40%;">
            <input style="width: 50%;" type="submit" name="save" class="btn btn-block create-account" value="View Eligible Students">
        </div>
    </form>
</div>

<?php
include 'admin_dash_footer.php';
?>