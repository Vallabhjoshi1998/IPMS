<?php
include 'admin_dash_header.php';
?>
<div class="title" style="font-size:40px; text-align:center">Add Current Drives</div><br>
<div class="form">

    <br>
    <br>
    
    <div class="subtitle">Please enter current drive details which are ongoing or</div>
    <div class="subtitle1">happening in next 15 days!</div>

    <form action="current_driveConnection.php" method="post" enctype="multipart/form-data">
        <div class="input-container ic1">
            <input id="firstname" class="input" type="text" placeholder=" " name="company_name" required />
            <div class="cut cut-long"></div>
            <label for="firstname" class="placeholder">Company Name</label>
        </div>
        <div class="input-container ic2">
            <input id="lastname" class="input" type="text" placeholder=" " name="salary_details" required />
            <div class="cut cut-salary"></div>
            <label for="lastname" class="placeholder">Salary in LPA</label>
        </div>
        <div class="input-container ic2">
            <input id="el_criteria" class="input" type="text" placeholder=" " name="el_criteria" required />
            <div class="cut cut-long-eligibilty"></div>
            <label for="el_criteria" class="placeholder">Eligibilty Criterion</label>
        </div>
        <div class="input-container ic2">
            <input id="date_drive" class="input" type="date" placeholder=" " name="date_drive" required />
            <div class="cut cut-long-eligibilty"></div>
            <label for="date_drive" class="placeholder">Date of Drive</label>
        </div>
        <div class="input-container ic2">
            <input id="batch" class="input" type="text" placeholder=" " name="batch" required />
            <div class="cut cut-long-eligibilty"></div>
            <label for="batch" class="placeholder">For Batch</label>
        </div>


        <!-- <h3 style="color: azure;">Upload Eligibilty List</h3>
        <input class="file" type="file" name="myfile" required> <br>
        <button type="submit" name="save">Upload</button>
        <br> -->

        <input type="submit" name="save" class="submit" value="Add Drive Details" />
    </form>


    <!-- If we want to redirect a user to admin dashboard once again but here problem is that we are not able to redirect due to admin privileges.. -->
    <!-- <button onclick="window.location.href='/admin_dash.php'">Click me</button> -->


    </div>
    <br>
    <br>
    <br>



<?php
include 'admin_dash_footer.php';
?>