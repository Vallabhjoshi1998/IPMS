<?php
    session_start();
?>
<?php
include 'admin_dash_header.php';
?>
 <section>
                <h1>Internship Opportunities</h1>
                <div class="ipms-table">
                    <table cellpadding="10" cellspacing="10" border="0">
                        <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Eligibility Criteria</th>
                                <th>Start Date</th>
                                <th>Duration</th>
                                <th>Batch</th>
                                <th>Registration Link</th>
                            </tr>
                        </thead>
                    
                

<?php

$connect = mysqli_connect("localhost", "root", "", "ipms") or die("Connection failed");
$_SESSION['errorMessage'] = false;

    $query = "SELECT * FROM internship_opportunities WHERE batch='$batch'";
    $result = mysqli_query($connect, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $_SESSION['errorMessage'] = false;

        while ($row    = mysqli_fetch_array($result)) {

            $company_name= $row['company_name'];
            $el_criteria= $row['el_criteria'];
            $date_start= $row['date_start'];
            $duration= $row['duration'];
            $batch= $row['batch'];
            $reg_link= $row['reg_link'];
            
            
    
    
 ?>
                
                
                            <tr>
                                <td> <?php echo $company_name ?></td>
                                <td> <?php echo $el_criteria ?> </td>
                                <td> <?php echo $date_start ?> </td>
                                <td> <?php echo $duration ?> </td>
                                <td><?php  echo $batch ?></td>
                                <td> <?php echo $reg_link ?> </td>
                            </tr>
                       
    <?php
        }
    }
    ?>
                         </tbody>
                    </table>
                </div>
            </section>

<?php
include 'admin_dash_footer.php';
?>
