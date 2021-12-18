<?php
    include '../utility/dbconfig.php';
    include 'admin_dash_header.php';
?>


<div class="title" style="font-size:40px; text-align:center">Add Notification</div>
<div class="form" style="margin-bottom: 10%;">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        

        <form action="delete_notification_connection.php" method="post" enctype="multipart/form-data">
            
                 
            <div class="input-container ic2">
                <input id="alert_id" class="input" type="text" placeholder=" " name="alert_id" required>
                <div class="cut cut-salary"></div>
                <label for="alert_id" class="placeholder">Alert Id</label>
            </div>
            
    
           
            <input type="submit" name="save" class="submit" value="Delete Notification" />
        </form>


        <!-- If we want to redirect a user to admin dashboard once again but here problem is that we are not able to redirect due to admin privileges.. -->
        <!-- <button onclick="window.location.href='/admin_dash.php'">Click me</button> -->

    </div>


<?php
    include 'admin_dash_footer.php';
?>