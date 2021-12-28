<?php
ob_start();
session_start();

$conn = mysqli_connect("localhost", "root", "", "ipms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$reg_no = $_SESSION['reg_no'];

$sql = "SELECT * FROM attendance_internship where reg_no='$reg_no'";
$result = mysqli_query($conn, $sql);
$row_pdf = mysqli_fetch_array($result);

if (isset($_POST["create_pdf"])) {
    require_once('../tcpdf_min/tcpdf.php');

    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("Student Attendance");
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
                <h1 style="text-align: center;"> STUDENT ATTENDANCE </h1>

                <table border="1" cellspacing="0" cellpadding="5">
                        <tr>
                            <th>Registration Number</th>
                            <th>Student Name</th>
                            <th>Name of Organisation</th>
                            <th>Address of Organisation</th>
                            <th>Class Roll Number</th>
                        </tr>
                        <tr>  
                            <td>' . $row_pdf["reg_no"] . '</td>
                            <td>' . $row_pdf["stud_name"] . '</td>
                            <td>' . $row_pdf["name_of_org"] . '</td>
                            <td>' . $row_pdf["address_of_org"] . '</td>
                            <td>' . $row_pdf["att_rno"] . '</td>
                        </tr>
                        <tr>
                            <th>Name of Course</th>
                            <th>Commencement Date</th>
                            <th>Completion Date</th>
                            <th>Authority Name</th>
                            <th>Authority Number</th>
                        </tr>
                        <tr>
                            <td>' . $row_pdf["name_of_course"] . '</td>
                            <td>' . $row_pdf["comm_date"] . '</td>
                            <td>' . $row_pdf["comp_date"] . '</td>
                            <td>' . $row_pdf["authority_name"] . '</td> 
                            <td>' . $row_pdf["authority_number"] . '</td>    
                        </tr>
                </table>
                <table border="1" cellspacing="0" cellpadding="5">
                                        <tr>
                                            <th>Date</th>
                                            <th>Attendance</th>
                                        </tr>
                                        ' . ($row = mysqli_fetch_array($result))['
                                        <tr>
                                            <td>' . $row_pdf["att_date"] . '</td>
                                            <td>' . $row_pdf["attendance"] . '</td>
                                        </tr>
                                        '] . '
    ';
    $content .= '</table>';
    $obj_pdf->writeHTML($content);
    ob_end_flush();
    $obj_pdf->Output('student_attendance_' . $row_pdf["stud_name"] . '.pdf', 'I');
}
