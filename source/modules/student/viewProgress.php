<?php
include 'student_dash_header.php';
$dbPro = mysqli_connect("localhost", "root", "", "ipms");

if (!empty($_POST['save'])) {
    $c_name = $_POST['c_name'];
?>
    <h3><?php echo $c_name ?> Drive</h3><br><br><br>
    <section>
        <div>
            <h3>Eligibility List :</h3><br><br>
            <?php
            $progress = "SELECT eligibility_list FROM progress WHERE batch = '$batch' AND company_name = '$c_name'";
            $pro_res = mysqli_query($dbPro, $progress);
            while ($row_pro = mysqli_fetch_assoc($pro_res)) {
                $eligibility = $row_pro['eligibility_list'];
                if ($eligibility) {

            ?>

                    <div style="margin-left: 20%;">
                        <embed src="../progress/eligibility_list/<?php echo $eligibility ?>" width="300px" height="400px">
                    </div>
        </div><br>
<?php
                }
            }
?>
<br>
    </section>
    <section>
        <div>
            <h3>Shortlisted fot Technical Interviews :</h3><br><br>
            <?php
            $progress = "SELECT technical FROM progress WHERE batch = '$batch' AND company_name = '$c_name'";
            $pro_res = mysqli_query($dbPro, $progress);
            while ($row_pro = mysqli_fetch_assoc($pro_res)) {
                $technical = $row_pro['technical'];
                if ($technical) {

            ?>


                    <div style="margin-left: 20%;">
                        <embed src="../progress/technical/<?php echo $technical ?>" width="300px" height="400px" />
                    </div>
        </div><br>
<?php
                }
            }
?>
<br>
    </section>
    <section>
        <div>
            <h3>Shortlisted fot HR Interviews :</h3><br><br>
            <?php
            $progress = "SELECT HR FROM progress WHERE batch = '$batch' AND company_name = '$c_name'";
            $pro_res = mysqli_query($dbPro, $progress);
            while ($row_pro = mysqli_fetch_assoc($pro_res)) {
                $HR = $row_pro['HR'];
                if ($HR) {

            ?>


                    <div style="margin-left: 20%;">
                        <embed src="../progress/HR/<?php echo $HR ?>" width="300px" height="400px" />
                    </div>
        </div><br>
<?php
                }
            }
?>
<br>
    </section>
    <section>
        <div>
            <h3>Final Selected :</h3><br><br>
            <?php
            $progress = "SELECT final FROM progress WHERE batch = '$batch' AND company_name = '$c_name'";
            $pro_res = mysqli_query($dbPro, $progress);
            while ($row_pro = mysqli_fetch_assoc($pro_res)) {
                $final = $row_pro['final'];
                if ($final) {

            ?>


                    <div style="margin-left: 20%;">
                        <embed src="../progress/final_selections/<?php echo $final ?>" width="300px" height="400px" />
                    </div>
        </div><br>
    </section>


<?php
                }
            }
?>
<?php
}
include 'student_dash_footer.php';
?>