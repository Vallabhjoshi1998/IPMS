<?php
ob_start();
session_start();
?>
<?php
include 'admin_dash_header.php';
?>

<?php
function fetch_data()
{
    $batch = $_SESSION['batch'];
    $output = '';
    $conn_here = mysqli_connect("localhost", "root", "", "ipms");
    $sql = "SELECT * FROM internship_data WHERE batch='$batch'";
    $result_pdf = mysqli_query($conn_here, $sql);
    while ($row = mysqli_fetch_array($result_pdf)) {
        $output .= '<tr>  
                          <td>' . $row["fname"] . '</td>  
                          <td>' . $row["lname"] . '</td>  
                          <td>' . $row["email_id"] . '</td>  
                          <td>' . $row["company_name"] . '</td>  
                          <td>' . $row["start_date"] . '</td>
                          <td>' . $row["end_date"] . '</td>   
                     </tr>  
                          ';
    }
    return $output;
}
if (isset($_POST["create_pdf"])) {
    require_once('../tcpdf_min/tcpdf.php');
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");
    $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $obj_pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $obj_pdf->SetDefaultMonospacedFont('helvetica');
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
    $obj_pdf->setPrintHeader(false);
    $obj_pdf->setPrintFooter(false);
    $obj_pdf->SetAutoPageBreak(TRUE, 10);
    $obj_pdf->SetFont('helvetica', '', 12);
    $obj_pdf->AddPage();
    $content = '';
    $content .= '
      <div>
            <img style="width: 100000000%;" src="header.png" alt="" srcset="">
      </div>  
      <h3 align="center">All Placements</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                    <th width="13%">Student Name</th>
                    <th width="13%">Last Name</th>
                    <th width="38.8%">Email Id</th>
                    <th width="14.7%">Company Name</th>
                    <th width="14.2%">Start Date </th>
                    <th width="14.2%">End Date </th>
           </tr>  
      ';
    $content .= fetch_data();
    $content .= '</table>';
    $obj_pdf->writeHTML($content);
    ob_end_clean();
    $obj_pdf->Output('all_internships.pdf', 'I');
}
?>
<!DOCTYPE html>
<html>

<head>
    <h1>All Internship</h1>
</head>

<body>
    <br /><br />
    <div class="container" style="margin-bottom: 10%;">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="13%">First Name</th>
                    <th width="13%">Last Name</th>
                    <th width="40%">Email Id</th>
                    <th width="25%">Company Name</th>
                    <th width="15%">Start Date </th>
                    <th width="15%">End Date </th>
                </tr>
                <?php
                echo fetch_data();
                ?>
            </table>
            <br />
            <form method="post">
                <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />
            </form>
        </div>
    </div>
</body>

</html>

<?php
include 'admin_dash_footer.php';
?>