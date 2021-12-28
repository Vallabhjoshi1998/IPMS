<?php 
session_start();
include 'admin_dash_header.php';

$connection_all = mysqli_connect("localhost", "root", "", "ipms");

$que = "SELECT DISTINCT company_name FROM placement_data WHERE batch= '$batch'";
$res = mysqli_query($connection_all, $que);

?>
<div style="text-align: center;">
    <h2>Companywise Total Placements</h2>
</div>
<div class="container">
        <div >
            <table class="table table-bordered" style="margin-right: 10%;">
                <tr>
                   <th style="width: 30%;">Sr.<br>No.</th> 
                   <th>Company Name</th>
                   <th>Information Technology</th>
                   <th>Computer Technology</th>
                   <th>Electrical</th>
                   <th>Electronics</th>
                   <th>ETC</th>
                   <th>Civil</th>
                   <th>Mechanical</th>
                   <th>Total Placed Students</th>
                </tr> 
                <tbody>
                    <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($res)) {
                            $com = $row['company_name'];
                            $it = "SELECT email_id FROM placement_data WHERE batch= '$batch' AND (company_name = '$com' AND branch = 'Information Technology')";
                            $ct = "SELECT email_id FROM placement_data WHERE batch= '$batch' AND (company_name = '$com' AND branch = 'Computer Technology')";
                            $el = "SELECT email_id FROM placement_data WHERE batch= '$batch' AND (company_name = '$com' AND branch = 'Electrical')";
                            $ee = "SELECT email_id FROM placement_data WHERE batch= '$batch' AND (company_name = '$com' AND branch = 'Electronics')";
                            $et = "SELECT email_id FROM placement_data WHERE batch= '$batch' AND (company_name = '$com' AND branch = 'Electronics and Telecommunication')";
                            $cv = "SELECT email_id FROM placement_data WHERE batch= '$batch' AND (company_name = '$com' AND branch = 'Civil')";
                            $me = "SELECT email_id FROM placement_data WHERE batch= '$batch' AND (company_name = '$com' AND branch = 'Mechanical')";
                            $count_quer= "SELECT email_id FROM placement_data WHERE batch= '$batch' AND company_name = '$com'";
                            $count_it= mysqli_query($connection_all, $it);
                            $count_ct= mysqli_query($connection_all, $ct);
                            $count_el= mysqli_query($connection_all, $el);
                            $count_ee= mysqli_query($connection_all, $ee);
                            $count_et= mysqli_query($connection_all, $et);
                            $count_cv= mysqli_query($connection_all, $cv);
                            $count_me= mysqli_query($connection_all, $me);
                            $count_res= mysqli_query($connection_all, $count_quer);
                            $it_count = mysqli_num_rows($count_it);
                            $ct_count = mysqli_num_rows($count_ct);
                            $el_count = mysqli_num_rows($count_el);
                            $ee_count = mysqli_num_rows($count_ee);
                            $et_count = mysqli_num_rows($count_et);
                            $cv_count = mysqli_num_rows($count_cv);
                            $me_count = mysqli_num_rows($count_me);
                            $count_count = mysqli_num_rows($count_res);
                    ?>
                    <tr>
                        <td><?php echo ++$i; ?></td>
                        <td><?php echo $com ?></td>
                        <td><?php echo $it_count ?></td>
                        <td><?php echo $ct_count ?></td>
                        <td><?php echo $el_count ?></td>
                        <td><?php echo $ee_count ?></td>
                        <td><?php echo $et_count ?></td>
                        <td><?php echo $cv_count ?></td>
                        <td><?php echo $me_count ?></td>
                        <td><?php echo $count_count ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

<?php
include 'admin_dash_footer.php';
?>