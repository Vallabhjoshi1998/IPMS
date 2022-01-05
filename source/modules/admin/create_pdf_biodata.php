<?php
ob_start();
session_start();

$conn = mysqli_connect("localhost", "root", "", "ipms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$reg_no = $_SESSION['reg_no'];
$sql = "SELECT * FROM biodata where stud_eno='$reg_no'";
$result = mysqli_query($conn, $sql);
$row_pdf = mysqli_fetch_array($result);

if (isset($_POST["create_pdf"])) {
    require_once('../tcpdf_min/tcpdf.php');

    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("Student Biodata");
    $obj_pdf->SetAuthor("YCCE - T&P CELL");
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
                        <h1 style="text-align: center;"> STUDENT BIODATA </h1>
                        <h4>Student Details</h4>
                        <table border="1" cellspacing="0" cellpadding="5">
                                <tr>
                                    <th style="font-weight: bold;">Student Name</th>
                                    <th style="font-weight: bold;">Enrollment Number:</th>
                                    <th style="font-weight: bold;">Year</th>
                                    <th style="font-weight: bold;">Campus Address</th>
                                    <th style="font-weight: bold;">Mobile Number</th>
                                    <th style="font-weight: bold;">Email ID</th>
                                    <th style="font-weight: bold;">State</th>
                                    <th style="font-weight: bold;">City</th>
                                </tr>
                                <tr>  
                                    <td>' . $row_pdf["stud_name"] . '</td>
                                    <td>' . $row_pdf["stud_eno"] . '</td>
                                    <td>' . $row_pdf["stud_year"] . '</td>
                                    <td>' . $row_pdf["stud_cAddresss"] . '</td>
                                    <td>' . $row_pdf["stud_phone"] . '</td>
                                    <td>' . $row_pdf["stud_email"] . '</td>
                                    <td>' . $row_pdf["stud_state"] . '</td>
                                    <td>' . $row_pdf["stud_city"] . '</td>
                                </tr>
                        </table>
                        <h4>Industrial Supervisor</h4>
                        <table border="1" cellspacing="0" cellpadding="5">
                            <tr>
                                <th style="font-weight: bold;">Name</th>
                                <th style="font-weight: bold;">Title</th>
                                <th style="font-weight: bold;">Organization</th>
                                <th style="font-weight: bold;">Internship Campus Address</th>
                                <th style="font-weight: bold;">Mobile Number</th>
                                <th style="font-weight: bold;">Email ID</th>
                                <th style="font-weight: bold;">State</th>
                                <th style="font-weight: bold;">City</th>
                            </tr>
                            <tr>
                                <td>' . $row_pdf["sup_name"] . '</td>
                                <td>' . $row_pdf["sup_title"] . '</td>
                                <td>' . $row_pdf["sup_org"] . '</td>
                                <td>' . $row_pdf["ic_addresss"] . '</td>
                                <td>' . $row_pdf["sup_phone"] . '</td>  
                                <td>' . $row_pdf["sup_email"] . '</td>  
                                <td>' . $row_pdf["sup_state"] . '</td>  
                                <td>' . $row_pdf["sup_city"] . '</td>     
                            </tr>
                        </table>

                        <h4>Faculty Mentor</h4>
                        <table border="1" cellspacing="0" cellpadding="5">
                            <tr>
                                <th style="font-weight: bold;">Name</th>
                                <th style="font-weight: bold;">Adress</th>
                                <th style="font-weight: bold;">Mobile Number</th>
                            </tr>
                            <tr>
                                <td>' . $row_pdf["fac_name"] . '</td>
                                <td>' . $row_pdf["fac_addresss"] . '</td>
                                <td>' . $row_pdf["fac_phone"] . '</td>  
                            </tr>
                        </table>

                        <h4>Academic Credit Information</h4>
                        <table border="1" cellspacing="0" cellpadding="5">
                            <tr>
                                <th style="font-weight: bold;">Department</th>
                                <th style="font-weight: bold;">Title</th>
                                <th style="font-weight: bold;">Beginning Date</th>
                                <th style="font-weight: bold;">Ending Date</th>
                                <th style="font-weight: bold;">Credit</th>
                                <th style="font-weight: bold;">Hours Per Week</th>
                                <th style="font-weight: bold;">Paid/Unpaid</th>
                            </tr>
                            <tr>
                                <td>' . $row_pdf["ac_Departmen"] . '</td>
                                <td>' . $row_pdf["ac_ititle"] . '</td>
                                <td>' . $row_pdf["ac_begdate"] . '</td>
                                <td>' . $row_pdf["ac_enddate"] . '</td>
                                <td>' . $row_pdf["ac_credit"] . '</td>  
                                <td>' . $row_pdf["ac_hpw"] . '</td>  
                                <td>' . $row_pdf["bpaid"] . '</td>    
                            </tr>
                        </table>

                        <h4>Internship Evaluation Details:</h4>
                        <table border="1" cellspacing="0" cellpadding="5">
                            <tr>
                                   <td> I undersign students of <i style="font-weight: 700;"> ' . $row_pdf["sem"] . ' </i> Semester of <i style="font-weight: 700;"> ' . $row_pdf["semdept"] . ' </i> branch, follows the all the rules and regulations of college as well as the allotted company/organization for internship from
                                            <i style="font-weight: 700;"> ' . $row_pdf["sembegdate"] . ' </i>
                                            to
                                            <i style="font-weight: 700;"> ' . $row_pdf["sem_enddate"] . ' </i>
                                            .
                                    </td>
                            </tr>


    ';
    $content .= '</table>';
    $obj_pdf->writeHTML($content);
    ob_end_flush();
    $obj_pdf->Output('student_biodata.pdf', 'I');
}
