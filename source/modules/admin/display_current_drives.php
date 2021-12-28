<?php
session_start();
?>

<?php
include 'admin_dash_header.php';
?>


<section style="margin-bottom: 10%;">
    <h1>Visiting Companies</h1>
    <div class="ipms-table">
        <table cellpadding="0" cellspacing="0" border="0">
            <form action="viewProgress.php" method="POST">
                <thead>
                    <tr>
                        <th style="width: 15%;">Company Name</th>
                        <th style="width: 8%;">Salary</th>
                        <th style="width: 55%;">Eligibility Criteria</th>
                        <th style="width: 15%;">Drive Date</th>
                        <th style="width: 2%;">Batch</th>
                    </tr>
                </thead>



                <?php

                $connect = mysqli_connect("localhost", "root", "", "ipms") or die("Connection failed");
                $_SESSION['errorMessage'] = false;

                $query = "SELECT * FROM cr_drives WHERE batch = '$batch'";
                $result = mysqli_query($connect, $query);
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    $_SESSION['errorMessage'] = false;

                    while ($row    = mysqli_fetch_array($result)) {

                        $c_name    = $row['c_name'];
                        $sal_lpa = $row['sal_lpa'];
                        $elig_crit = $row['elig_crit'];
                        $date_drive = $row['date_drive'];
                        $batch = $row['batch'];



                ?>
                        <!-- <input type="submit" name="add" class="submit" value="Add Progress"><br> -->


                        <tr>
                            <td><input type="text" name="c_name" value="<?php echo $c_name ?>" hidden> <?php echo $c_name ?> </td>
                            <td> <?php echo $sal_lpa ?> </td>
                            <td> <?php echo $elig_crit ?> </td>
                            <td> <?php echo $date_drive ?> </td>
                            <td> <?php echo $batch ?> </td>
                        </tr>

                <?php
                    }
                }
                ?>
                </tbody>
            </form>
        </table>
    </div>
</section>

<div style="align-items: center; text-align: center;">
    <div style="float: left; margin-left: 20%;">
    <label for="add">Add Progress</label>
        <form action="addProgress.php" method="POST">

            <label> Select Company </label>
            <select name="c_name">

                <?php
                $query = "SELECT * FROM cr_drives WHERE batch = '$batch'";
                $resPro = mysqli_query($connect, $query);
                $countPro = mysqli_num_rows($resPro);
                if ($countPro > 0) {
                    $_SESSION['errorMessage'] = false;

                    while ($rowPro    = mysqli_fetch_array($resPro)) {

                        $c_name    = $rowPro['c_name'];
                ?>

                        <option name="c_name" value="<?php echo $c_name ?>"><?php echo $c_name ?></option>>
                <?php
                    }
                }
                ?>
            </select><br>
            <br>
            <input type="submit" name="save" class="submit" value="Add Progress">
            <br>
            <br><br><br>
        </form>
    </div>

    <div style="float: right; margin-right: 20%;">
    <label for="view">View Progress</label>
        <form action="viewProgress.php" method="POST">

            <label> Select Company </label>
            <select name="c_name">

                <?php
                $query = "SELECT * FROM cr_drives WHERE batch = '$batch'";
                $resPro = mysqli_query($connect, $query);
                $countPro = mysqli_num_rows($resPro);
                if ($countPro > 0) {
                    $_SESSION['errorMessage'] = false;

                    while ($rowPro    = mysqli_fetch_array($resPro)) {

                        $c_name    = $rowPro['c_name'];
                ?>

                        <option name="c_name" value="<?php echo $c_name ?>"><?php echo $c_name ?></option>>
                <?php
                    }
                }
                ?>
            </select><br>
            <br>
            <input type="submit" name="save" class="submit" value="View Progress">
            <br>
            <br><br><br>
        </form>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>


<?php
include 'admin_dash_footer.php';
?>