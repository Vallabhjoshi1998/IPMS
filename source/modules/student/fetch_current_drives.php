<?php
session_start();

include 'student_dash_header.php';

$connect = mysqli_connect("localhost", "root", "", "ipms") or die("Connection failed");
$_SESSION['errorMessage'] = false;

$query = "SELECT * FROM cr_drives WHERE batch = '$batch' ";
$result = mysqli_query($connect, $query);
$count = mysqli_num_rows($result);
if ($count > 0) {
    $_SESSION['errorMessage'] = false;
?>


    <section>
        <h1>Visiting Companies</h1>
        <div class="ipms-table">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Salary</th>
                        <th>Eligibility Criteria</th>
                        <th>Drive Date</th>
                        <th>Batch</th>
                    </tr>
                </thead>



                <?php



                while ($row    = mysqli_fetch_array($result)) {

                    $c_name    = $row['c_name'];
                    $sal_lpa = $row['sal_lpa'];
                    $elig_crit = $row['elig_crit'];
                    $date_drive = $row['date_drive'];
                    $batch = $row['batch'];



                ?>


                    <tr>
                        <form>
                            <td> <?php echo $c_name ?> </td>
                            <td> <?php echo $sal_lpa ?> </td>
                            <td> <?php echo $elig_crit ?> </td>
                            <td> <?php echo $date_drive ?> </td>
                            <td> <?php echo $batch ?> </td>
                        </form>
                    </tr>

            <?php
                }
            }
            ?>
            </tbody>
            </table>
        </div>


    </section>
    <br>
    <br>
    <br>

    <div style="margin-left: 45%;">
    <label for="view" >View Progress</label><br>
        <form action="viewProgress.php" method="POST">

            <label style="margin-left: -7%;"> Select Company </label>
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
    include 'student_dash_footer.php';
    ?>