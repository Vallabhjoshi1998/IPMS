<?php

//import.php

include '../spreadsheet_utility/autoload.php';

$connect = new PDO("mysql:host=localhost;dbname=ipms", "root", "");

if($_FILES["import_excel"]["name"] != '')
{
 $allowed_extension = array('xls', 'csv', 'xlsx');
 $file_array = explode(".", $_FILES["import_excel"]["name"]);
 $file_extension = end($file_array);

 if(in_array($file_extension, $allowed_extension))
 {
  $file_name = time() . '.' . $file_extension;
  move_uploaded_file($_FILES['import_excel']['tmp_name'], $file_name);
  $file_type = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file_name);
  $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($file_type);

  $spreadsheet = $reader->load($file_name);

  unlink($file_name);

  $data = $spreadsheet->getActiveSheet()->toArray();

  foreach($data as $row)
  {
   $insert_data = array(
    ':first_name'  => $row[0],
    ':last_name'  => $row[1],
    ':created_at'  => $row[2],
    ':branch'  => $row[3],
	':company_name' => $row[4],
	'sal_lpa' => $row[5]
   );

   $query = "
   INSERT INTO placement_data 
   (fname, lname, email_id, branch, company_name, sal_lpa) 
   VALUES (:first_name, :last_name, :created_at, :branch, :company_name, :sal_lpa)
   ";

   $statement = $connect->prepare($query);
   $statement->execute($insert_data);
  }
  $message = '<div class="alert alert-success">Data Imported Successfully</div>';

 }
 else
 {
  $message = '<div class="alert alert-danger">Only .xls .csv or .xlsx file allowed</div>';
 }
}
else
{
 $message = '<div class="alert alert-danger">Please Select File</div>';
}

echo $message;

?>