<?php include 'admin_dash_header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YCCE - Student Feedback</title>
</head>

<body>
<?php
    if(!empty($_POST['save'])){
    
    $conn = mysqli_connect("localhost", "root", "", "ipms");

    $_SESSION['reg_no'] = $_POST['reg_no'];
    $reg_no = $_SESSION['reg_no'];
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM student_feedback where reg_no = '$reg_no'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container py-1">
        <div class="row py-5">
            <div class="col-lg-10 mx-auto">
                <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                        <div class="table-responsive">
                            <div>
                                <img style="width: 98%;" src="header.png" alt="" srcset="">
                            </div>
                            <header class="text-center text-black">
                                <h3>STUDENT FEEDBACK</h3>
                            </header>

                            <table style="width:100%" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Date:</th>
                                        <th>Supervisor Name</th>
                                        <th>Supervisor Email</th>
                                        <th>Paid</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['stud_name']; ?></td>
                                        <td><?php echo $row['f_date']; ?></td>
                                        <td><?php echo $row['work_supervisor']; ?></td>
                                        <td><?php echo $row['sup_email']; ?></td>
                                        <td><?php echo $row['paid']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="width: 100%;" class="table table-bordered">
                                <thead>
                                    <th>Company Name</th>
                                    <th>Internship Adress</th>
                                    <th>Faculty Co-ordinator</th>
                                    <th>Department</th>
                                </thead>
                                <tbody>
                                    <td><?php echo $row['companyName']; ?></td>
                                    <td><?php echo $row['internship_address']; ?></td>
                                    <td><?php echo $row['faculty_coordinator']; ?></td>
                                    <td><?php echo $row['department']; ?></td>
                                </tbody>
                            </table>


                            <table id="example" style="width:100%" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Question</th>
                                        <th>Strongly Agree</th>
                                        <th>Agree</th>
                                        <th>No Opinion</th>
                                        <th>Disagree</th>
                                        <th>Strongly Disagree</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Given me the opportunity to explore a career field</td>
                                        <td style="color: red;"><?php if ($row["one"] == "Strongly Agree") {
                                                                    echo $row["one"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["one"] == "Agree") {
                                                                    echo $row["one"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["one"] == "No Opinion") {
                                                                    echo $row["one"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["one"] == "Disagree") {
                                                                    echo $row["one"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["one"] == "Strongly Disagree") {
                                                                    echo $row["one"];
                                                                } ?></td>
                                    </tr>
                                    <tr>
                                        <td>Allowed me to apply classroom theory to practice</td>
                                        <td style="color: red;"><?php if ($row["two"] == "Strongly Agree") {
                                                                    echo $row["two"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["two"] == "Agree") {
                                                                    echo $row["two"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["two"] == "No Opinion") {
                                                                    echo $row["two"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["two"] == "Disagree") {
                                                                    echo $row["two"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["two"] == "Strongly Disagree") {
                                                                    echo $row["two"];
                                                                } ?></td>
                                    </tr>
                                    <tr>
                                        <td>Helped me develop my decision-making and problem-solving skills</td>
                                        <td style="color: red;"><?php if ($row["three"] == "Strongly Agree") {
                                                                    echo $row["three"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["three"] == "Agree") {
                                                                    echo $row["three"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["three"] == "No Opinion") {
                                                                    echo $row["three"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["three"] == "Disagree") {
                                                                    echo $row["three"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["three"] == "Strongly Disagree") {
                                                                    echo $row["three"];
                                                                } ?></td>
                                    </tr>
                                    <tr>
                                        <td>Expanded my knowledge about the work world prior to permanent employment</td>
                                        <td style="color: red;"><?php if ($row["four"] == "Strongly Agree") {
                                                                    echo $row["four"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["four"] == "Agree") {
                                                                    echo $row["four"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["four"] == "No Opinion") {
                                                                    echo $row["four"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["four"] == "Disagree") {
                                                                    echo $row["four"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["four"] == "Strongly Disagree") {
                                                                    echo $row["four"];
                                                                } ?></td>
                                    </tr>
                                    <tr>
                                        <td>Helped me develop my written and oral communication skills</td>
                                        <td style="color: red;"><?php if ($row["five"] == "Strongly Agree") {
                                                                    echo $row["five"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["five"] == "Agree") {
                                                                    echo $row["five"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["five"] == "No Opinion") {
                                                                    echo $row["five"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["five"] == "Disagree") {
                                                                    echo $row["five"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["five"] == "Strongly Disagree") {
                                                                    echo $row["five"];
                                                                } ?></td>
                                    </tr>
                                    <tr>
                                        <td>Provided a chance to use leadership skills (influence others, develop ideas with others, stimulate decision-making and action)</td>
                                        <td style="color: red;"><?php if ($row["six"] == "Strongly Agree") {
                                                                    echo $row["six"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["six"] == "Agree") {
                                                                    echo $row["six"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["six"] == "No Opinion") {
                                                                    echo $row["six"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["six"] == "Disagree") {
                                                                    echo $row["six"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["six"] == "Strongly Disagree") {
                                                                    echo $row["six"];
                                                                } ?></td>
                                    </tr>
                                    <tr>
                                        <td>Expanded my sensitivity to the ethical implications of the work involved</td>
                                        <td style="color: red;"><?php if ($row["seven"] == "Strongly Agree") {
                                                                    echo $row["seven"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["seven"] == "Agree") {
                                                                    echo $row["seven"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["seven"] == "No Opinion") {
                                                                    echo $row["seven"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["seven"] == "Disagree") {
                                                                    echo $row["seven"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["seven"] == "Strongly Disagree") {
                                                                    echo $row["seven"];
                                                                } ?></td>
                                    </tr>
                                    <tr>
                                        <td>Made it possible for me to be more confident in new situations</td>
                                        <td style="color: red;"><?php if ($row["eight"] == "Strongly Agree") {
                                                                    echo $row["eight"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["eight"] == "Agree") {
                                                                    echo $row["eight"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["eight"] == "No Opinion") {
                                                                    echo $row["eight"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["eight"] == "Disagree") {
                                                                    echo $row["seven"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["eight"] == "Strongly Disagree") {
                                                                    echo $row["eight"];
                                                                } ?></td>
                                    </tr>
                                    <tr>
                                        <td>Given me a chance to improve my interpersonal skills</td>
                                        <td style="color: red;"><?php if ($row["nine"] == "Strongly Agree") {
                                                                    echo $row["nine"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["nine"] == "Agree") {
                                                                    echo $row["nine"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["nine"] == "No Opinion") {
                                                                    echo $row["nine"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["nine"] == "Disagree") {
                                                                    echo $row["nine"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["nine"] == "Strongly Disagree") {
                                                                    echo $row["nine"];
                                                                } ?></td>
                                    </tr>
                                    <tr>
                                        <td>Helped me learn to handle responsibility and use my time wisely</td>
                                        <td style="color: red;"><?php if ($row["ten"] == "Strongly Agree") {
                                                                    echo $row["ten"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["ten"] == "Agree") {
                                                                    echo $row["ten"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["ten"] == "No Opinion") {
                                                                    echo $row["ten"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["ten"] == "Disagree") {
                                                                    echo $row["ten"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["ten"] == "Strongly Disagree") {
                                                                    echo $row["ten"];
                                                                } ?></td>
                                    </tr>
                                    <tr>
                                        <td>Helped me discover new aspects of myself that I didn’t know existed before</td>
                                        <td style="color: red;"><?php if ($row["eleven"] == "Strongly Agree") {
                                                                    echo $row["eleven"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["eleven"] == "Agree") {
                                                                    echo $row["eleven"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["eleven"] == "No Opinion") {
                                                                    echo $row["eleven"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["eleven"] == "Disagree") {
                                                                    echo $row["eleven"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["eleven"] == "Strongly Disagree") {
                                                                    echo $row["eleven"];
                                                                } ?></td>
                                    </tr>
                                    <tr>
                                        <td>Helped me develop new interests and abilities</td>
                                        <td style="color: red;"><?php if ($row["twelve"] == "Strongly Agree") {
                                                                    echo $row["twelve"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["twelve"] == "Agree") {
                                                                    echo $row["twelve"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["twelve"] == "No Opinion") {
                                                                    echo $row["twelve"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["twelve"] == "Disagree") {
                                                                    echo $row["twelve"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["twelve"] == "Strongly Disagree") {
                                                                    echo $row["twelve"];
                                                                } ?></td>
                                    </tr>
                                    <tr>
                                        <td>Helped me clarify my career goals</td>
                                        <td style="color: red;"><?php if ($row["thirteen"] == "Strongly Agree") {
                                                                    echo $row["thirteen"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["thirteen"] == "Agree") {
                                                                    echo $row["thirteen"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["thirteen"] == "No Opinion") {
                                                                    echo $row["thirteen"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["thirteen"] == "Disagree") {
                                                                    echo $row["thirteen"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["thirteen"] == "Strongly Disagree") {
                                                                    echo $row["thirteen"];
                                                                } ?></td>
                                    </tr>
                                    <tr>
                                        <td>Provided me with contacts which may lead to future employment</td>
                                        <td style="color: red;"><?php if ($row["fourteen"] == "Strongly Agree") {
                                                                    echo $row["fourteen"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["fourteen"] == "Agree") {
                                                                    echo $row["fourteen"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["fourteen"] == "No Opinion") {
                                                                    echo $row["fourteen"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["fourteen"] == "Disagree") {
                                                                    echo $row["fourteen"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["fourteen"] == "Strongly Disagree") {
                                                                    echo $row["fourteen"];
                                                                } ?></td>
                                    </tr>
                                    <tr>
                                        <td>Allowed me to acquire information and/ or use equipment not available at my Institute</td>
                                        <td style="color: red;"><?php if ($row["fifteen"] == "Strongly Agree") {
                                                                    echo $row["fifteen"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["fifteen"] == "Agree") {
                                                                    echo $row["fifteen"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["fifteen"] == "No Opinion") {
                                                                    echo $row["fifteen"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["fifteen"] == "Disagree") {
                                                                    echo $row["fifteen"];
                                                                } ?></td>
                                        <td style="color: red;"><?php if ($row["fifteen"] == "Strongly Disagree") {
                                                                    echo $row["fifteen"];
                                                                } ?></td>
                                    </tr>
                                </tbody>

                            </table>

                            <table id="example" style="width:100%" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Question</th>
                                        <th>Answer</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-weight: bold;">1) In the Institute internship program, faculty members are expected to be mentors for students. Do you feel that your faculty coordinator served such a function? Why or why not?</td>
                                        <td><?php echo $row["que1"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;">2) How well were you able to
                                            accomplish the initial goals, tasks and new skills that were set down in your
                                            learning contract? In what ways were you able to take a new direction or expand
                                            beyond your contract? Why were some goals not accomplished adequately?</td>
                                        <td><?php echo $row["que2"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;">3) In what areas did you most develop and improve?</td>
                                        <td><?php echo $row["que3"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;">4) What has been the most significant accomplishment or satisfying moment of your internship?</td>
                                        <td><?php echo $row["que4"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;">5) What did you dislike about the internship?</td>
                                        <td><?php echo $row["que5"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;">6) Considering your overall experience, how would you rate this internship? (Circle one). (Satisfactory/
                                            Good/ Excellent)</td>
                                        <td><?php echo $row["que6"]; ?></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="create_pdf.php" method="post" style="padding-bottom: 10%; margin-left: 45%;">
          <button type="submit" class="btn btn-primary" name="create_pdf">Create PDF</button>                                                                                      
    </form>

</body>
<?php
    }
    ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>

<?php include 'admin_dash_footer.php' ?>