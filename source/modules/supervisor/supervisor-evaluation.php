<?php
include 'supervisor_dash_header.php';
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
    width: 50%
  }

  .center {
    margin-left: auto;
    margin-right: auto;
  }

  #sig-canvas {
    border: 2px dotted #CCCCCC;
    border-radius: 15px;
    cursor: crosshair;
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
  <form action="supervisor_evaluation_Connect.php" method="POST" style="margin-bottom: 10%;">
    <div class="container">
      <h2 style="text-align:center;">SUPERVISOR EVALUATION OF INTERN</h2><br>
      <div class="left">
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="name">Student Name:</label></b>
        <input type="text" id="stud_name" name="stud_name"><br><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="Work Supervisor">Work Supervisor:</label></b>
        <input type="text" id="work_supervisor" name="work_supervisor"><br><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="email">Supervisor Email:</label></b>
        <input type="email" id="supervisor_email" name="supervisor_email"><br><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="Companyname">Company:</label></b>
        <input type="text" id="cmpny_name" name="cmpny_name"><br><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="Internship Address">Internship Address:</label></b>
        <input type="text" id="internship_address" name="internship_address"><br><br>
      </div>
      <div class="right">
        <b><label for="date">Date From:</label></b>
        <input type="date" id="date_start" name="date_start"><br><br>
        <b><label for="date">Date To:</label></b>
        <input type="date" id="end_date" name="end_date"><br><br>
        <b><label for="name">Title:</label></b>
        <input type="text" id="title" name="title"><br><br>
        <b><label for="Internship">Internship is:</label></b><br>
        <label for="paid">Paid</label>
        <input type="radio" id="paid" name="paid_status" value="paid">
        <label for="paid">Unpaid</label>
        <input type="radio" id="paid" name="paid_status" value="unpaid"><br><br>
      </div>
      <div class="container">
        <table style="width:90%; text-align:center;" class="center">
          <tr>
            <th>Parameters:</th>
            <th>Needs improvement</th>
            <th>Satisfactory</th>
            <th>Good</th>
            <th>Excellent</th>
          </tr>
          <tr>
            <td>Behaviors</td>
            <td style="text-align:center;"><input type="radio" id="one" name="one" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="one" name="one" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="one" name="one" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="one" name="one" value="Excellent"></td>
          </tr>
          <tr>
            <td>Performs in a dependable manner</td>
            <td style="text-align:center;"><input type="radio" id="two" name="two" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="two" name="two" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="two" name="two" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="two" name="two" value="Excellent"></td>
          </tr>
          <tr>
            <td>Cooperates with co-workers and supervisors</td>
            <td style="text-align:center;"><input type="radio" id="three" name="three" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="three" name="three" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="three" name="three" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="three" name="three" value="Excellent"></td>
          </tr>
          <tr>
            <td>Shows interest in work/ Shows good judgment </td>
            <td style="text-align:center;"><input type="radio" id="four" name="four" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="four" name="four" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="four" name="four" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="four" name="four" value="Excellent"></td>
          </tr>
          <tr>
            <td>Learns quickly </td>
            <td style="text-align:center;"><input type="radio" id="five" name="five" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="five" name="five" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="five" name="five" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="five" name="five" value="Excellent"></td>
          </tr>
          <tr>
            <td>Shows initiative</td>
            <td style="text-align:center;"><input type="radio" id="six" name="six" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="six" name="six" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="six" name="six" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="six" name="six" value="Excellent"></td>
          </tr>
          <tr>
            <td>Produces high quality work</td>
            <td style="text-align:center;"><input type="radio" id="seven" name="seven" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="seven" name="seven" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="seven" name="seven" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="seven" name="seven" value="Excellent"></td>
          </tr>
          <tr>
            <td>Accepts responsibility/ Accepts criticism</td>
            <td style="text-align:center;"><input type="radio" id="eight" name="eight" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="eight" name="eight" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="eight" name="eight" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="eight" name="eight" value="Excellent"></td>
          </tr>
          <tr>
            <td>Demonstrates organizational skills</td>
            <td style="text-align:center;"><input type="radio" id="nine" name="nine" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="nine" name="nine" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="nine" name="nine" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="nine" name="nine" value="Excellent"></td>
          </tr>
          <tr>
            <td>Uses technical knowledge and expertise </td>
            <td style="text-align:center;"><input type="radio" id="ten" name="ten" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="ten" name="ten" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="ten" name="ten" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="ten" name="ten" value="Excellent"></td>
          </tr>
          <tr>
            <td>Demonstrates creativity/originality </td>
            <td style="text-align:center;"><input type="radio" id="eleven" name="eleven" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="eleven" name="eleven" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="eleven" name="eleven" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="eleven" name="eleven" value="Excellent"></td>
          </tr>
          <tr>
            <td>Analyzes problems effectively</td>
            <td style="text-align:center;"><input type="radio" id="twelve" name="twelve" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="twelve" name="twelve" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="twelve" name="twelve" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="twelve" name="twelve" value="Excellent"></td>
          </tr>
          <tr>
            <td>Is self-reliant</td>
            <td style="text-align:center;"><input type="radio" id="thirteen" name="thirteen" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="thirteen" name="thirteen" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="thirteen" name="thirteen" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="thirteen" name="thirteen" value="Excellent"></td>
          </tr>
          <tr>
            <td>Communicates well and Writes effectively</td>
            <td style="text-align:center;"><input type="radio" id="fourteen" name="fourteen" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="fourteen" name="fourteen" value="Satisfactory"></td>
            </td>
            <td style="text-align:center;"><input type="radio" id="fourteen" name="fourteen" value="Good"></td>
            </td>
            <td style="text-align:center;"><input type="radio" id="fourteen" name="fourteen" value="Excellent"></td>
            </td>
          </tr>
          <tr>
            <td>Has a professional attitude</td>
            <td style="text-align:center;"><input type="radio" id="fifteen" name="fifteen" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="fifteen" name="fifteen" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="fifteen" name="fifteen" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="fifteen" name="fifteen" value="Excellent"></td>
          </tr>
          <tr>
            <td>Gives a professional appearance</td>
            <td style="text-align:center;"><input type="radio" id="sixteen" name="sixteen" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="sixteen" name="sixteen" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="sixteen" name="sixteen" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="sixteen" name="sixteen" value="Excellent"></td>
          </tr>
          <tr>
            <td>Is punctual and Uses time effectively</td>
            <td style="text-align:center;"><input type="radio" id="seventeen" name="seventeen" value="Needs Improvement"></td>
            <td style="text-align:center;"><input type="radio" id="seventeen" name="seventeen" value="Satisfactory"></td>
            <td style="text-align:center;"><input type="radio" id="seventeen" name="seventeen" value="Good"></td>
            <td style="text-align:center;"><input type="radio" id="seventeen" name="seventeen" value="Excellent"></td>
          </tr>
        </table><br>
        <b>
          <ul>
            <li>Overall performance of student intern:<br>
              Satisfactory<input type="radio" id="stud_rating" name="stud_rating" value="Satisfactory">
              Good<input type="radio" id="stud_rating" name="stud_rating" value="Good">
              Excellent<input type="radio" id="stud_rating" name="stud_rating" value="Excellent"></li><br>
            <li>Additional comments, if any:</li>
            <textarea name="additional_comment" rows="05" cols="90"></textarea></li><br>

          </ul>
        </b>
        <div id="form-Y04" style="text-align: center;"><input type="submit" name="save" value="Submit"></div>
        <br>
  <br>
  <br>
  <br>
  </form>
</body>


<?php
include 'supervisor_dash_footer.php';
?>