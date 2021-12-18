<?php
include 'admin_dash_header.php';

if(!empty($_GET['save'])){
    $c_name = $_GET['c_name'];
?>
    <form action="addProgressConnection.php" method="GET" enctype="multipart/form-data">
        <div class="input-container ic1">

            <input id="company_name" class="input" type="text" placeholder=" " name="company_name" required />
            <div class="cut cut-long"></div>
            <label for="firstname" class="placeholder"><?php  echo $c_name ?></label>
        </div>

        <div class="input-container ic2">
            <input id="el_criteria" class="input" type="text" placeholder=" " name="el_criteria" required />
            <div class="cut cut-long-eligibilty"></div>
            <label for="el_criteria" class="placeholder">Eligibilty Criterion</label>
        </div>

        <div class="input-container ic2">
            <input id="date_start" class="input" type="date" placeholder=" " name="date_start" required />
            <div class="cut cut-salary"></div>
            <label for="date_start" class="placeholder">Start Date</label>
        </div>

        <div class="input-container ic2">
            <input id="duration" class="input" type="text" placeholder=" " name="duration" required />
            <div class="cut cut-salary"></div>
            <label for="duartion" class="placeholder">Duration of Internship</label>
        </div>

        <div class="input-container ic2">
            <input id="reg_link" class="input" type="text" placeholder=" " name="reg_link" required />
            <div class="cut cut-long-eligibilty"></div>
            <label for="reg_link" class="placeholder">Registration Link</label>
        </div>


        <!-- <h3 style="color: azure;">Upload Eligibilty List</h3>
            <input style="color: aqua; margin-bottom: 10px;" type="file" name="myfile" required> <br> -->
        <!-- <button type="submit" name="save">Upload</button> -->

        <input type="submit" name="save" class="submit" value="Add Drive Details" />
    </form>

<?php
}
include 'admin_dash_footer.php';
?>