<?php 
session_start();
include 'admin_dash_header.php';

$connection_all = mysqli_connect("localhost", "root", "", "ipms");

$que = "SELECT DISTINCT company_name FROM placement_data";
$res = mysqli_query($connection_all, $que);

?>
<div style="text-align: center;">
    <h2>Companywise Total Placements</h2>
</div>
<div class="container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                   <th>Sr.No.</th> 
                   <th>Company Name</th>
                   <th>Total Placed Students</th>
                </tr>
                <tbody>
                    <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($res)) {
                            $com = $row['company_name'];
                            if($com != '-'){
                            $count_quer= "SELECT email_id FROM placement_data WHERE company_name = '$com'";
                            $count_res= mysqli_query($connection_all, $count_quer);
                            $count_count = mysqli_num_rows($count_res);
                    ?>
                    <tr>
                        <td><?php echo ++$i; ?></td>
                        <td><?php echo $com ?></td>
                        <td><?php echo $count_count ?></td>
                    </tr>
                    <?php } }?>
                </tbody>
            </table>

<?php
include 'admin_dash_footer.php';
?>