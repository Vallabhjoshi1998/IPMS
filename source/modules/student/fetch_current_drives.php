<?php
session_start();

include 'student_dash_header.php';

$connect = mysqli_connect("localhost", "root", "", "ipms") or die("Connection failed");
$_SESSION['errorMessage'] = false;

$query = "select * from cr_drives";
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
                        <th>Progress</th>
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
                        <td> <input type="submit" name="save" class="btn btn-block create-account" value="View Progress"></td> 
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

  
    <?php
    include 'student_dash_footer.php';
    ?>