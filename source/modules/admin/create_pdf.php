<?php
ob_start();
session_start();

$conn = mysqli_connect("localhost", "root", "", "ipms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$reg_no = $_SESSION['reg_no'];
$sql = "SELECT * FROM student_feedback where reg_no='$reg_no'";
$result = mysqli_query($conn, $sql);
$row_pdf = mysqli_fetch_array($result);

if (isset($_POST["create_pdf"])) {
    require_once('../tcpdf_min/tcpdf.php');

    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("Student Feedback");
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
                        <h1 style="text-align: center;"> STUDENT FEEDBACK </h1>
                        <table border="1" cellspacing="0" cellpadding="5">
                                <tr>
                                    <th style="font-weight: bold;" >Student Name</th>
                                    <th style="font-weight: bold;">Date:</th>
                                    <th style="font-weight: bold;">Supervisor Name</th>
                                    <th style="font-weight: bold;">Supervisor Email</th>
                                    <th style="font-weight: bold;">Paid</th>
                                </tr>
                                <tr>  
                                    <td>' . $row_pdf["stud_name"] . '</td>
                                    <td>' . $row_pdf["f_date"] . '</td>
                                    <td>' . $row_pdf["work_supervisor"] . '</td>
                                    <td>' . $row_pdf["sup_email"] . '</td>
                                    <td>' . $row_pdf["paid"] . '</td>
                        </tr>
                                <tr>
                                    <th style="font-weight: bold;">Company Name</th>
                                    <th style="font-weight: bold;">Internship Adress</th>
                                    <th style="font-weight: bold;">Faculty Co-ordinator</th>
                                    <th style="font-weight: bold;">Department</th>
                                </tr>
                                <tr>
                                    <td>' . $row_pdf["companyName"] . '</td>
                                    <td>' . $row_pdf["internship_address"] . '</td>
                                    <td>' . $row_pdf["faculty_coordinator"] . '</td>
                                    <td>' . $row_pdf["department"] . '</td>   
                                </tr>
                        </table>

                        <table style="width:100%; margin-bottom: 5%;" class="table table-bordered" border="1" cellspacing="0" cellpadding="5">
                                    <tr>
                                        <th style="font-weight: bold;">Question</th>
                                        <th style="font-weight: bold;">Strongly Agree</th>
                                        <th style="font-weight: bold;">Agree</th>
                                        <th style="font-weight: bold;">No Opinion</th>
                                        <th style="font-weight: bold;">Disagree</th>
                                        <th style="font-weight: bold;">Strongly Disagree</th>
                                    </tr>
                                    <tr>
                                        <td>Given me the opportunity to explore a career field</td>
                                        <td style="color: red;">' .(($row_pdf["one"] == "Strongly Agree")? $row_pdf["one"] : "") . '</td>
                                        <td style="color: red;">'. (($row_pdf["one"] == "Agree")? $row_pdf["one"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["one"] == "No Opinion")? $row_pdf["one"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["one"] == "Disagree")? $row_pdf["one"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["one"] == "Strongly Disagree")? $row_pdf["one"] : "")  .'</td>
                                    </tr>
                                    <tr>
                                        <td>Allowed me to apply classroom theory to practice</td>
                                        <td style="color: red;">'. (($row_pdf["two"] == "Strongly Agree")? $row_pdf["two"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["two"] == "Agree")? $row_pdf["two"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["two"] == "No Opinion")? $row_pdf["two"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["two"] == "Disagree")? $row_pdf["two"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["two"] == "Strongly Disagree")? $row_pdf["two"] : "")  .'</td>
                                    </tr>
                                    <tr>
                                        <td>Helped me develop my decision-making and problem-solving skills</td>
                                        <td style="color: red;">'. (($row_pdf["three"] == "Strongly Agree")? $row_pdf["three"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["three"] == "Agree")? $row_pdf["three"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["three"] == "No Opinion")? $row_pdf["three"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["three"] == "Disagree")? $row_pdf["three"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["three"] == "Strongly Disagree")? $row_pdf["three"] : "")  .'</td>
                                    </tr>
                                    <tr>
                                        <td>Expanded my knowledge about the work world prior to permanent employment</td>
                                        <td style="color: red;">'. (($row_pdf["four"] == "Strongly Agree")? $row_pdf["four"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["four"] == "Agree")? $row_pdf["four"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["four"] == "No Opinion")? $row_pdf["four"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["four"] == "Disagree")? $row_pdf["four"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["four"] == "Strongly Disagree")? $row_pdf["four"] : "")  .'</td>
                                    </tr>
                                    <tr>
                                        <td>Helped me develop my written and oral communication skills</td>
                                        <td style="color: red;">'. (($row_pdf["five"] == "Strongly Agree")? $row_pdf["five"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["five"] == "Agree")? $row_pdf["five"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["five"] == "No Opinion")? $row_pdf["five"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["five"] == "Disagree")? $row_pdf["five"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["five"] == "Strongly Disagree")? $row_pdf["five"] : "")  .'</td>
                                    </tr>
                                    <tr>
                                        <td>Provided a chance to use leadership skills (influence others, develop ideas with others, stimulate decision-making and action)</td>
                                        <td style="color: red;">'. (($row_pdf["six"] == "Strongly Agree")? $row_pdf["six"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["six"] == "Agree")? $row_pdf["six"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["six"] == "No Opinion")? $row_pdf["six"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["six"] == "Disagree")? $row_pdf["six"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["six"] == "Strongly Disagree")? $row_pdf["six"] : "")  .'</td>
                                    </tr>
                                    <tr>
                                        <td>Expanded my sensitivity to the ethical implications of the work involved</td>
                                        <td style="color: red;">'. (($row_pdf["seven"] == "Strongly Agree")? $row_pdf["seven"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["seven"] == "Agree")? $row_pdf["seven"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["seven"] == "No Opinion")? $row_pdf["seven"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["seven"] == "Disagree")? $row_pdf["seven"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["seven"] == "Strongly Disagree")? $row_pdf["seven"] : "")  .'</td>
                                    </tr>
                                    <tr>
                                        <td>Made it possible for me to be more confident in new situations</td>
                                        <td style="color: red;">'. (($row_pdf["eight"] == "Strongly Agree")? $row_pdf["eight"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["eight"] == "Agree")? $row_pdf["eight"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["eight"] == "No Opinion")? $row_pdf["eight"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["eight"] == "Disagree")? $row_pdf["eight"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["eight"] == "Strongly Disagree")? $row_pdf["eight"] : "")  .'</td>
                                    </tr>
                                    <tr>
                                        <td>Given me a chance to improve my interpersonal skills</td>
                                        <td style="color: red;">'. (($row_pdf["nine"] == "Strongly Agree")? $row_pdf["nine"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["nine"] == "Agree")? $row_pdf["nine"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["nine"] == "No Opinion")? $row_pdf["nine"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["nine"] == "Disagree")? $row_pdf["nine"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["nine"] == "Strongly Disagree")? $row_pdf["nine"] : "")  .'</td>
                                    </tr>
                                    <tr>
                                        <td>Helped me learn to handle responsibility and use my time wisely</td>
                                        <td style="color: red;">'. (($row_pdf["ten"] == "Strongly Agree")? $row_pdf["ten"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["ten"] == "Agree")? $row_pdf["ten"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["ten"] == "No Opinion")? $row_pdf["ten"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["ten"] == "Disagree")? $row_pdf["ten"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["ten"] == "Strongly Disagree")? $row_pdf["ten"] : "")  .'</td>
                                    </tr>
                                    <tr>
                                        <td>Helped me discover new aspects of myself that I didn’t know existed before</td>
                                        <td style="color: red;">'. (($row_pdf["eleven"] == "Strongly Agree")? $row_pdf["eleven"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["eleven"] == "Agree")? $row_pdf["eleven"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["eleven"] == "No Opinion")? $row_pdf["eleven"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["eleven"] == "Disagree")? $row_pdf["eleven"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["eleven"] == "Strongly Disagree")? $row_pdf["eleven"] : "")  .'</td>
                                    </tr>
                                    <tr>
                                        <td>Helped me develop new interests and abilities</td>
                                        <td style="color: red;">'. (($row_pdf["twelve"] == "Strongly Agree")? $row_pdf["twelve"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["twelve"] == "Agree")? $row_pdf["twelve"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["twelve"] == "No Opinion")? $row_pdf["twelve"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["twelve"] == "Disagree")? $row_pdf["twelve"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["twelve"] == "Strongly Disagree")? $row_pdf["twelve"] : "")  .'</td>

                                    </tr>
                                    <tr>
                                        <td>Helped me clarify my career goals</td>
                                        <td style="color: red;">'. (($row_pdf["thirteen"] == "Strongly Agree")? $row_pdf["thirteen"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["thirteen"] == "Agree")? $row_pdf["thirteen"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["thirteen"] == "No Opinion")? $row_pdf["thirteen"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["thirteen"] == "Disagree")? $row_pdf["thirteen"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["thirteen"] == "Strongly Disagree")? $row_pdf["thirteen"] : "")  .'</td>
                                    </tr>
                                    <tr>
                                        <td>Provided me with contacts which may lead to future employment</td>
                                        <td style="color: red;">'. (($row_pdf["fourteen"] == "Strongly Agree")? $row_pdf["fourteen"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["fourteen"] == "Agree")? $row_pdf["fourteen"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["fourteen"] == "No Opinion")? $row_pdf["fourteen"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["fourteen"] == "Disagree")? $row_pdf["fourteen"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["fourteen"] == "Strongly Disagree")? $row_pdf["fourteen"] : "")  .'</td>
                                    </tr>
                                    <tr>
                                        <td>Allowed me to acquire information and/ or use equipment not available at my Institute</td>
                                        <td style="color: red;">'. (($row_pdf["fifteen"] == "Strongly Agree")? $row_pdf["fifteen"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["fifteen"] == "Agree")? $row_pdf["fifteen"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["fifteen"] == "No Opinion")? $row_pdf["fifteen"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["fifteen"] == "Disagree")? $row_pdf["fifteen"] : "")  .'</td>
                                        <td style="color: red;">'. (($row_pdf["fifteen"] == "Strongly Disagree")? $row_pdf["fifteen"] : "")  .'</td>
                                    </tr>
                                    </table>

                                    <table style="width:100%" class="table table-bordered" border="1" cellspacing="0" cellpadding="5">
                                        <tr>
                                            <th style="font-weight: bold;">Question</th>
                                            <th style="font-weight: bold;">Answer</th>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;">1) In the Institute internship program, faculty members are expected to be mentors for students. Do you feel that your faculty coordinator served such a function? Why or why not?</td>
                                            <td>'. $row_pdf["que1"] .'</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;">2) How well were you able to
                                                accomplish the initial goals, tasks and new skills that were set down in your
                                                learning contract? In what ways were you able to take a new direction or expand
                                                beyond your contract? Why were some goals not accomplished adequately?</td>
                                            <td>
                                                <p>'. $row_pdf["que2"] .'</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;">3) In what areas did you most develop and improve?</td>
                                            <td>
                                                <p>'. $row_pdf["que3"] .'</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;">4) What has been the most significant accomplishment or satisfying moment of your internship?</td>
                                            <td>
                                                <p>'. $row_pdf["que4"] .'</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;">5) What did you dislike about the internship?</td>
                                            <td>
                                                <p>'. $row_pdf["que5"] .'</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;">6) Considering your overall experience, how would you rate this internship? (Circle one). (Satisfactory/
                                                Good/ Excellent)</td>
                                            <td>
                                                <p>'. $row_pdf["que6"] .'</p>
                                            </td>
                                        </tr>

    ';
    $content .= '</table>';
    $obj_pdf->writeHTML($content);
    ob_end_flush();
    $obj_pdf->Output('student_feedback.pdf', 'I');
}
