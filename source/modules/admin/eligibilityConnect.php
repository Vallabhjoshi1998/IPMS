<?php
include 'admin_dash_header.php';

$conn_here = mysqli_connect("localhost", "root", "", "ipms");
if (!empty($_POST['save'])) {

    $company = $_POST['company'];

    $per10 = $_POST['per10'];

    $per12 = $_POST['per12'];

    $perDip = $_POST['perDip'];

    $avgSgpa = $_POST['avgSgpa'];

    $gap = $_POST['gap'];

    $backlog = $_POST['backlog'];

    $place_stat = $_POST['place_stat'];

    if($place_stat == "Unplaced" && $backlog == 0)
    {
        $sql = "SELECT regNo, dept, fname, lname, email_id FROM info WHERE per10 >= '$per10' AND (per12 >= '$per12' OR perDip >= '$perDip') AND avgSgpa >= '$avgSgpa' AND  gap<='$gap' AND live='$backlog' AND placement_status='$place_stat'";
    }
    else if($place_stat == "Unplaced" && $backlog == 1)
    {
        $sql = "SELECT regNo, dept, fname, lname, email_id FROM info WHERE per10 >= '$per10' AND (per12 >= '$per12' OR perDip >= '$perDip') AND avgSgpa >= '$avgSgpa' AND  gap<='$gap' AND placement_status='$place_stat'";
              
    }
    else if($place_stat == "Placed" && $backlog == 0)
    {   
        $sql = "SELECT regNo, dept, fname, lname, email_id FROM info WHERE per10 >= '$per10' AND (per12 >= '$per12' OR perDip >= '$perDip') AND avgSgpa >= '$avgSgpa' AND  gap<='$gap' AND live='$backlog'";
    }
    else if($place_stat == "Placed" && $backlog == 1)
    {
        $sql = "SELECT regNo, dept, fname, lname, email_id FROM info WHERE per10 >= '$per10' AND (per12 >= '$per12' OR perDip >= '$perDip') AND avgSgpa >= '$avgSgpa' AND  gap<='$gap'";
    }
    else if($place_stat == "Single Offer" && $backlog == 0)
    {
        $sql = "SELECT regNo, dept, fname, lname, email_id FROM info WHERE per10 >= '$per10' AND (per12 >= '$per12' OR perDip >= '$perDip') AND avgSgpa >= '$avgSgpa' AND  gap<='$gap' AND live='$backlog' AND (placement_status='$place_stat' OR placement_status = 'Unplaced')";
    }
    else if($place_stat == "Single Offer" && $backlog == 1)
    {
        $sql = "SELECT regNo, dept, fname, lname, email_id FROM info WHERE per10 >= '$per10' AND (per12 >= '$per12' OR perDip >= '$perDip') AND avgSgpa >= '$avgSgpa' AND  gap<='$gap' AND (placement_status='$place_stat' OR placement_status = 'Unplaced')";
              
    }

    $result_pdf = mysqli_query($conn_here, $sql); 
    
?>

    <table>
        <tr>
            <td>Sr.No.</td>
            <td>Registration Number</td>
            <td>Department</td>
            <td>Student Name</td>
            <td>Email ID</td>
        </tr>
        <tbody>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result_pdf)) {
            ?>
                <tr>
                    <td><?php echo ++$i; ?></td>
                    <td><?php echo $row['regNo'] ?></td>
                    <td><?php echo $row['dept'] ?></td>
                    <td><?php echo $row['fname']?> &nbsp;<?php echo $row['lname'] ?></td>
                    <td><?php echo $row['email_id'] ?></td>
                </tr><?php }
                } ?>
        </tbody>
    </table>

    <?php

    include 'admin_dash_footer.php';
    ?>