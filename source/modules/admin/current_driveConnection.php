<?php
error_reporting(0);
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['save'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
		$folder = "image/".$filename;
		
	$db = mysqli_connect("localhost", "root", "", "ipms");

        $company_name = $_POST['company_name'];
        $salary_details = $_POST['salary_details'];
        $el_criteria = $_POST['el_criteria'];
        $date_drive = $_POST['date_drive'];
        $batch = $_POST['batch'];
        // $eligibilty_list = $_POST['filename'];

		// Get all the submitted data from the form
		$sql = "INSERT INTO cr_drives(c_name, sal_lpa, elig_crit, date_drive, batch) VALUES ('$company_name','$salary_details','$el_criteria','$date_drive','$batch')";

		// Execute query
		mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}
}
// $result = mysqli_query($db, "SELECT * FROM image");
?>

<?php
// connect to the database
$conn = mysqli_connect("localhost", "root", "", "ipms");

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'C:\xampp\htdocs\IPMS\current_drives\uploads_eligibilty_list' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size) VALUES ('$filename', '$size')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

header("Location:current_drives.php");
		exit();
?>


