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
            <form action="viewProgress.php" method="GET">
            <thead>
                <tr>
                    <th style="width: 15%;">Company Name</th>
                    <th style="width: 8%;">Salary</th>
                    <th style="width: 55%;">Eligibility Criteria</th>
                    <th style="width: 15%;">Drive Date</th>
                    <th style="width: 2%;">Batch</th>
                    <th>Progress</th>
                </tr>
            </thead>



            <?php

            $connect = mysqli_connect("localhost", "root", "", "ipms") or die("Connection failed");
            $_SESSION['errorMessage'] = false;

            $query = "select * from cr_drives";
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


                    <tr>
                        <td name='$c_name'> <?php echo $c_name ?> </td>
                        <td> <?php echo $sal_lpa ?> </td>
                        <td> <?php echo $elig_crit ?> </td>
                        <td> <?php echo $date_drive ?> </td>
                        <td> <?php echo $batch ?> </td>
                        <td><input type="submit" name="save" class="submit" value="View Progress"></td>
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
    <form action="addProgress.php" method="GET">
        <label> Select Company </label>
        <select>

            <?php
            $query = "select * from cr_drives";
            $resPro = mysqli_query($connect, $query);
            $countPro = mysqli_num_rows($resPro);
            if ($countPro > 0) {
                $_SESSION['errorMessage'] = false;

                while ($rowPro    = mysqli_fetch_array($resPro)) {

                    $c_name    = $rowPro['c_name'];
            ?>

                    <option name=c_name value="$c_name"><?php echo $c_name ?></option>
            <?php
                }
            }
            ?>
        </select><br>
        <br>
        <input type="submit" name="save" class="submit" value="Add Progress">
    </form>
</div>

<br>
<br>
<br>

<br>
<br>


<?php
include 'admin_dash_footer.php';
?>