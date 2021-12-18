<?php
include 'student_dash_header.php';
?>
<div class="title" style="font-size:40px; text-align:center">Add Internships</div>

<br>
<div class="form">

    <br>
    <form action="student_add_internship_connection.php" method="GET">
        <div class="form-icon">
            <span><i class="icon icon-user"></i></span>
        </div>

        <div class="form-group">
            <input type="email" name="email_id" class="form-control item" id="email_id" placeholder="Email Id">
        </div>

        <div class="form-group">
            <div style="text-align: center;">
                <label for="option1">Select Company</label></b><br>
                <?php
                $comp = "SELECT * FROM placement_data WHERE email_id = $username";
                $res1 = mysqli_query($connect, $comp);
                if (mysqli_num_rows($res1) > 0) {
                    
                    while ($row_comp = mysqli_fetch_assoc($res1)) {
                        $company_name = $row_comp['company_name'];
                ?>
                <label for="comp"><?php echo $company_name  ?></label>
                <input type="radio" id="comp" name="comp" value= "$company_name"><br>
                
            </div>
            <?php
                }
            }
                ?>
        </div>




        <div class="submit">
            <input type="submit" name="save" class="btn btn-block create-account" value="Add Details">
        </div>
    </form>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php
include 'student_dash_footer.php';
?>