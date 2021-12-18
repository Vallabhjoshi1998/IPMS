<?php
    include 'student_dash_header.php';
?>

<section>
    <h1>Your Placements</h1>
    <div class="ipms-table">
        <table cellpadding="10" cellspacing="10" border="0">
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>


            <?php

            $query = "SELECT * FROM placement_data where email_id = '$username'";

            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $company_name = $row['company_name'];
                    $sal_lpa = $row['sal_lpa'];
            ?>
                    <tr>
                        <td> <?php echo $company_name ?> </td>
                        <td> <?php echo $sal_lpa ?> </td>
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
    include 'student_dash_footer.php';
?>