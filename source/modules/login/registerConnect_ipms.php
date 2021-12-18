<?php
$connectDb = mysqli_connect("localhost", "root", "", "ipms")  or die("Connection failed");
if (!empty($_GET['save'])) {
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $username = $_GET['username'];
    $pass = $_GET['pass'];
    $cnf_pass = $_GET['cnf_pass'];
    $query = "INSERT INTO login_details(fname,lname,email_id,pass) VALUES ('$fname','$lname','$username','$pass')";
    $result = mysqli_query($connectDb, $query);
    if (!$result) {

?>
        <script>
            alert("User already exist ! Try to login...");
            window.location.href = "register_ipms.php";
            <?php exit(); ?>
        </script>
    <?php
    } else {
        header("Location:addInfo.php");


    ?>

<?php
    }
}
?>
<script type="text/javascript">
    alert("Successfully added");
</script>
<?php
mysqli_close($connectDb);
?>