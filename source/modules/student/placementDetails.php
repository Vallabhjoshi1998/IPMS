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
                    <th>Offer Letter</th>
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

                        $fetchOff = "SELECT * FROM offerletter WHERE email_id= '$username' AND company_name = '$company_name'";
                        $resFetch = mysqli_query($connect, $fetchOff);
                        $fetchRes = mysqli_fetch_assoc($resFetch);
                        $offerLetter = $fetchRes['source'];


                ?>
                        <tr>
                            <td> <?php echo $company_name ?></td>
                            <td><?php echo $sal_lpa ?> </td>
                            <td><embed src="../offer_letters/<?php echo $offerLetter ?>" width="300px" height="400px" /></td>
                            <!-- <td><input type="submit" name="save" class="btn btn-block create-account" value="Update Offer Letter"></td> -->
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
<br>
<h5 style="text-align: center;">Add Offer Letter</h5><br>
<div style="margin-left: 45%;">

    <form action="uploadOffer.php" method="GET">
        <label style="margin-left: -7%;"> Select Company </label>
        <select name="company_name">

            <?php
            $query = "SELECT * FROM placement_data where email_id = '$username'";

            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $company_name = $row['company_name'];
            ?>

                    <option name="company_name" value="<?php echo $company_name ?>"><?php echo $company_name ?></option>>
            <?php
                }
            }
            ?>
        </select><br>
        <br>
        <input type="submit" name="save" class="submit" value="Upload">
    </form>
</div>

<?php
include 'student_dash_footer.php';
?>