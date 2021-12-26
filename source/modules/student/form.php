<?php
include 'student_dash_header.php';
?>
<style>
  table,
  th,
  td {
    border: 1px solid black;
  }

  label {
    display: inline-block;
    width: 150px;
    text-align: right;
  }

  .left {
    float: left;
    width: 50%;
  }

  .right {
    float: right;
    width: 45%
  }

  .center {
    margin-left: auto;
    margin-right: auto;
  }

  input[type=submit] {
    background-color: #3F00FF;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
  }
</style>

<body>
  <form action="form_connect.php" method="POST">
    <div class="container">
      <h2 style="text-align:center;">STUDENT FEEDBACK OF INTERNSHIP</h2><br>
      <div class="left">
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="name">Registration No:</label></b>
        <input type="text" id="reg_no" name="reg_no"><br><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="name">Student Name:</label></b>
        <input type="text" id="stud_name" name="stud_name"><br><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="Work Supervisor">Work Supervisor:</label></b>
        <input type="text" id="Work Supervisor" name="work_supervisor"><br><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="email">Supervisor Email:</label></b>
        <input type="email" id="email" name="sup_email"><br><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="Companyname">Company:</label></b>
        <input type="text" id="Companyname" name="companyName"><br><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="Internship Address">Internship Address:</label></b>
        <input type="text" id="Internship Address" name="internship_address"><br><br>
      </div>
      <div class="right">
        <b><label for="Faculty Coordinator">Faculty Co.:</label></b>
        <input type="text" id="Faculty Coordinator" name="faculty_coordinator"><br><br>
        <b><label for="date">Date:</label></b>
        <input type="date" id="date" name="f_date"><br><br>
        <b><label for="Internship">Internship is:</label></b>
        Paid<input type="radio" id="paid" name="paid" value="paid">
        Unpaid<input type="radio" id="paid" name="paid" value="unpaid"><br><br>
        <b><label for="department">Department:</label></b>
        <input type="text" id="department" name="department"><br><br>
      </div>
      <div class="container">
        <table style="width:90%; text-align:center;" class="center">
          <tr>
            <th>This experience has:</th>
            <th>Strongly Agree</th>
            <th>Agree</th>
            <th>No Opinion</th>
            <th>Disagree</th>
            <th>Strongly Disagree</th>
          </tr>
          <tr>
            <td>Given me the opportnity to explore a career field.</td>
            <td style="text-align:center;"><input type="radio" id="one" name="one" value="Strongly Agree"></td>
            <td style="text-align:center;"><input type="radio" id="one" name="one" value="Agree"></td>
            <td style="text-align:center;"><input type="radio" id="one" name="one" value="No Opinion"></td>
            <td style="text-align:center;"><input type="radio" id="one" name="one" value="Disagree"></td>
            <td style="text-align:center;"><input type="radio" id="one" name="one" value="Strongly Disagree"></td>
          </tr>
          <tr>
            <td>Allowed me to apply classroom theory to practice</td>
            <td style="text-align:center;"><input type="radio" id="two" name="two" value="Strongly Agree"></td>
            <td style="text-align:center;"><input type="radio" id="two" name="two" value="Agree"></td>
            <td style="text-align:center;"><input type="radio" id="two" name="two" value="No Opinion"></td>
            <td style="text-align:center;"><input type="radio" id="two" name="two" value="Disagree"></td>
            <td style="text-align:center;"><input type="radio" id="two" name="two" value="Strongly Disagree"></td>
          </tr>
          <tr>
            <td>Helped me develop my decision-making and problem-solving skills</td>
            <td style="text-align:center;"><input type="radio" id="three" name="three" value="Strongly Agree"></td>
            <td style="text-align:center;"><input type="radio" id="three" name="three" value="Agree"></td>
            <td style="text-align:center;"><input type="radio" id="three" name="three" value="No Opinion"></td>
            <td style="text-align:center;"><input type="radio" id="three" name="three" value="Disagree"></td>
            <td style="text-align:center;"><input type="radio" id="three" name="three" value="Strongly Disagree"></td>
          </tr>
          <tr>
            <td>Expanded my knowledge about the work world prior to permanent </td>
            <td style="text-align:center;"><input type="radio" id="four" name="four" value="Strongly Agree"></td>
            <td style="text-align:center;"><input type="radio" id="four" name="four" value="Agree"></td>
            <td style="text-align:center;"><input type="radio" id="four" name="four" value="No Opinion"></td>
            <td style="text-align:center;"><input type="radio" id="four" name="four" value="Disagree"></td>
            <td style="text-align:center;"><input type="radio" id="four" name="four" value="Strongly Disagree"></td>
          </tr>
          <tr>
            <td>Helped me develop my written and oral communication skills </td>
            <td style="text-align:center;"><input type="radio" id="five" name="five" value="Strongly Agree"></td>
            <td style="text-align:center;"><input type="radio" id="five" name="five" value="Agree"></td>
            <td style="text-align:center;"><input type="radio" id="five" name="five" value="No Opinion"></td>
            <td style="text-align:center;"><input type="radio" id="five" name="five" value="Disagree"></td>
            <td style="text-align:center;"><input type="radio" id="five" name="five" value="Strongly Disagree"></td>
          </tr>
          <tr>
            <td>Provided a chance to use leadership skills (influence others, develop ideas with others, stimulate decision-making and action) </td>
            <td style="text-align:center;"><input type="radio" id="six" name="six" value="Strongly Agree"></td>
            <td style="text-align:center;"><input type="radio" id="six" name="six" value="Agree"></td>
            <td style="text-align:center;"><input type="radio" id="six" name="six" value="No Opinion"></td>
            <td style="text-align:center;"><input type="radio" id="six" name="six" value="Disagree"></td>
            <td style="text-align:center;"><input type="radio" id="six" name="six" value="Strongly Disagree"></td>
          </tr>
          <tr>
            <td>Expanded my sensitivity to the ethical implications of the work involved</td>
            <td style="text-align:center;"><input type="radio" id="seven" name="seven" value="Strongly Agree"></td>
            <td style="text-align:center;"><input type="radio" id="seven" name="seven" value="Agree"></td>
            <td style="text-align:center;"><input type="radio" id="seven" name="seven" value="No Opinion"></td>
            <td style="text-align:center;"><input type="radio" id="seven" name="seven" value="Disagree"></td>
            <td style="text-align:center;"><input type="radio" id="seven" name="seven" value="Strongly Disagree"></td>
          </tr>
          <tr>
            <td>Made it possible for me to be more confident in new situations</td>
            <td style="text-align:center;"><input type="radio" id="eight" name="eight" value="Strongly Agree"></td>
            <td style="text-align:center;"><input type="radio" id="eight" name="eight" value="Agree"></td>
            <td style="text-align:center;"><input type="radio" id="eight" name="eight" value="No Opinion"></td>
            <td style="text-align:center;"><input type="radio" id="eight" name="eight" value="Disagree"></td>
            <td style="text-align:center;"><input type="radio" id="eight" name="eight" value="Strongly Disagree"></td>
          </tr>
          <tr>
            <td>Given me a chance to improve my interpersonal skills</td>
            <td style="text-align:center;"><input type="radio" id="nine" name="nine" value="Strongly Agree"></td>
            <td style="text-align:center;"><input type="radio" id="nine" name="nine" value="Agree"></td>
            <td style="text-align:center;"><input type="radio" id="nine" name="nine" value="No Opinion"></td>
            <td style="text-align:center;"><input type="radio" id="nine" name="nine" value="Disagree"></td>
            <td style="text-align:center;"><input type="radio" id="nine" name="nine" value="Strongly Disagree"></td>
          </tr>
          <tr>
            <td>Helped me learn to handle responsibility and use my time wisely </td>
            <td style="text-align:center;"><input type="radio" id="ten" name="ten" value="Strongly Agree"></td>
            <td style="text-align:center;"><input type="radio" id="ten" name="ten" value="Agree"></td>
            <td style="text-align:center;"><input type="radio" id="ten" name="ten" value="No Opinion"></td>
            <td style="text-align:center;"><input type="radio" id="ten" name="ten" value="Disagree"></td>
            <td style="text-align:center;"><input type="radio" id="ten" name="ten" value="Strongly Disagree"></td>
          </tr>
          <tr>
            <td>Helped me discover new aspects of myself that I didn’t know existed </td>
            <td style="text-align:center;"><input type="radio" id="eleven" name="eleven" value="Strongly Agree"></td>
            <td style="text-align:center;"><input type="radio" id="eleven" name="eleven" value="Agree"></td>
            <td style="text-align:center;"><input type="radio" id="eleven" name="eleven" value="No Opinion"></td>
            <td style="text-align:center;"><input type="radio" id="eleven" name="eleven" value="Disagree"></td>
            <td style="text-align:center;"><input type="radio" id="eleven" name="eleven" value="Strongly Disagree"></td>
          </tr>
          <tr>
            <td>Helped me develop new interests and abilities</td>
            <td style="text-align:center;"><input type="radio" id="twelve" name="twelve" value="Strongly Agree"></td>
            <td style="text-align:center;"><input type="radio" id="twelve" name="twelve" value="Agree"></td>
            <td style="text-align:center;"><input type="radio" id="twelve" name="twelve" value="No Opinion"></td>
            <td style="text-align:center;"><input type="radio" id="twelve" name="twelve" value="Disagree"></td>
            <td style="text-align:center;"><input type="radio" id="twelve" name="twelve" value="Strongly Disagree"></td>
          </tr>
          <tr>
            <td>Helped me clarify my career goals</td>
            <td style="text-align:center;"><input type="radio" id="thirteen" name="thirteen" value="Strongly Agree"></td>
            <td style="text-align:center;"><input type="radio" id="thirteen" name="thirteen" value="Agree"></td>
            <td style="text-align:center;"><input type="radio" id="thirteen" name="thirteen" value="No Opinion"></td>
            <td style="text-align:center;"><input type="radio" id="thirteen" name="thirteen" value="Disagree"></td>
            <td style="text-align:center;"><input type="radio" id="thirteen" name="thirteen" value="Strongly Disagree"></td>
          </tr>
          <tr>
            <td>Provided me with contacts which may lead to future employment</td>
            <td style="text-align:center;"><input type="radio" id="fourteen" name="fourteen" value="Strongly Agree"></td>
            <td style="text-align:center;"><input type="radio" id="fourteen" name="fourteen" value="Agree"></td>
            </td>
            <td style="text-align:center;"><input type="radio" id="fourteen" name="fourteen" value="No Opinion"></td>
            </td>
            <td style="text-align:center;"><input type="radio" id="fourteen" name="fourteen" value="Disagree"></td>
            </td>
            <td style="text-align:center;"><input type="radio" id="fourteen" name="fourteen" value="Strongly Disagree"></td>
            </td>
          </tr>
          <tr>
            <td>Allowed me to acquire information and/ or use equipment not available at my Institute</td>
            <td style="text-align:center;"><input type="radio" id="fifteen" name="fifteen" value="Strongly Agree"></td>
            <td style="text-align:center;"><input type="radio" id="fifteen" name="fifteen" value="Agree"></td>
            <td style="text-align:center;"><input type="radio" id="fifteen" name="fifteen" value="No Opinion"></td>
            <td style="text-align:center;"><input type="radio" id="fifteen" name="fifteen" value="Disagree"></td>
            <td style="text-align:center;"><input type="radio" id="fifteen" name="fifteen" value="Strongly Disagree"></td>
          </tr>
        </table><br>
        <b>
          <ul>
            <li>In the Institute internship program, faculty members are expected to be mentors for students. Do you feel that your faculty coordinator served such a function? Why or why not?
              <textarea rows="05" cols="90" name="que1"></textarea>
            </li><br>
            <li>How well were you able to accomplish the initial goals, tasks and new skills that were set down in your learning contract?
              <textarea rows="05" cols="90" name="que2"></textarea>
            </li><br>
            <li>In what areas did you most develop and improve?<br>
              <textarea rows="05" cols="90" name="que3"></textarea>
            </li><br>
            <li>What has been the most significant accomplishment or satisfying moment of your internship?<br>
              <textarea rows="05" cols="90" name="que4"></textarea>
            </li><br>
            <li>What did you dislike about the internship?<br>
              <textarea rows="05" cols="90" name="que5"></textarea>
            </li><br>
            <li>Considering your overall experience, how would you rate this internship?<br>
              Satisfactory<input type="radio" id="rating" name="rating" value="Satisfactory">
              Good<input type="radio" id="rating" name="rating" value="Good">
              Excellent<input type="radio" id="rating" name="rating" value="Excellent"></li><br>
            <li>Give suggestions as to how your internship experience could have been improved</li>
            <textarea rows="05" cols="90" name="que6"></textarea></li><br>
          </ul>
        </b>
        <div id="form-Y04" style="text-align: center;"><input type="submit" name="submit" value="Submit"></div>
        <br>
        <br>
        <br>
        <br>
  </form>

  <?php
  include 'student_dash_footer.php';
  ?>