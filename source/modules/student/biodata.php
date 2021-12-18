<?php include 'student_dash_header.php' ?>

<!DOCTYPE html>
<html>

<head>
  <style>
    /* input[type=text] {
      background: transparent;
      border: none;
      border-bottom: 1px solid #000000;
  } */
    /* input[type=email] {
      background: transparent;
      border: none;
      border-bottom: 1px solid #000000;
  } */
    /* input[type=number] {
      background: transparent;
      border: none;
      border-bottom: 1px solid #000000;
  } */
    /* input[type=date] {
      background: transparent;
      border: none;
      border-bottom: 1px solid #000000;
  } */
    /* input[type=tel] {
      background: transparent;
      border: none;
      border-bottom: 1px solid #000000;
  } */
    table,
    th,
    td {
      border: 1px solid black;
    }

    label {
      display: inline-block;
      width: 180px;
      text-align: right;
    }

    .label_modify {
      display: inline-block;
      width: 450px;
      text-align: right;
    }

    .left {
      float: left;
      width: 65%;
    }

    .right {
      float: right;
      width: 35%
    }

    .center {
      margin-left: auto;
      margin-right: auto;
    }

    .box {
      background-color: lightblue;
      width: 1000px;
      border: 1px solid blue;
      padding: 50px;
      margin: 20px;
    }

    .body_one {
      padding-left: 20px;
    }
  </style>

</head>

<body>
  <div class="container">
<form action="biodataConnect.php" method="POST">
    <h1 style="text-align:center;"><u>Contact Details of Students and Industry and academic Mentor</u></h1><br>
    <h2 style="text-align:center;">Student Details</h2><br>
    <div class="body_one">
      <div class="box">
        <div class="left">
          <b><label for="bname">Student Name:</label></b>
          <input type="text" id="bname" name="stud_name" rows="4" cols="50"></input><br><br>
          <b><label for="eno">Enrollment Number:</label></b>
          <input type="text" id="eno" name="stud_eno"><br><br>
          <b><label for="by">Year:</label></b>
          <input type="text" id="by" name="stud_year"><br><br>
          <b><label for="c_addresss">Campus Address:</label></b>
          <input type="text" id="c_addresss" name="stud_cAddresss"><br><br>
        </div>
        <div class="right">

          <b><label for="bphone">Mobile Number:</label></b>
          <input type="tel" id="bphone" name="stud_phone" placeholder="+91-000-000-0000"  required maxlength="13" size="13"><br><br>
          <b><label for="e_email">Email:</label></b>
          <input type="email" id="e_email" name="stud_email"><br><br>
          <b><label for="state">State:</label></b>
          <input type="text" id="state" name="stud_state"><br><br>
          <br><br>
          <b><label for="city">City:</label></b>
          <input type="text" id="city" name="stud_city" rows="4" cols="50"></input><br><br>
        </div><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
    </div>

    <h2 style="text-align:center;">Industrial Supervisor</h2><br>
    <div class="body_one">
      <div class="box">
        <div class="left">
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for=bename">Name:</label></b>
          <input type="text" id="bename" name="sup_name" rows="4" cols="50"></input><br><br>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="etitle">Title:</label></b>
          <input type="text" id="etitle" name="sup_title"><br><br>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="co">Organization:</label></b>
          <input type="text" id="co" name="sup_org"><br><br>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="ic_addresss"> Internship Campus Address:</label></b>
          <input type="text" id="ic_addresss" name="ic_addresss"><br><br>
        </div>
        <div class="right">

          <b><label for="bephone">Mobile Number:</label></b>
          <input type="tel" id="bephone" name="sup_phone" placeholder="+91-000-000-0000"  required maxlength="13" size="13"><br><br>
          <b><label for="be_email">Email:</label></b>
          <input type="email" id="be_email" name="sup_email"><br><br>
          <b><label for="estate">State:</label></b>
          <input type="text" id="sup_state" name="sup_state">
          <br><br>
          <b><label for=ecity">City:</label></b>
          <input type="text" id="ecity" name="sup_city" rows="4" cols="50"></input><br><br>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
    </div>

    <h2 style="text-align:center;">Faculty mentor</h2><br>
    <div class="body_one">
      <div class="box">
        <div class="left">
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for=mname">Name:</label></b>
          <input type="text" id="mname" name="fac_name" rows="4" cols="50"></input><br><br>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="m_addresss">Address:</label></b>
          <input type="text" id="fac_addresss" name="fac_addresss"><br><br>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="mphone">Mobile Number:</label></b>
          <input type="tel" id="mphone" name="fac_phone" placeholder="+91-000-000-0000"  required maxlength="13" size="13"><br><br>
        </div><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>

      <h2 style="text-align:center;">Academic Credit Information</h2><br>
      <div class="box">
        <div class="left">
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for=bDepartmen">Department:</label></b>
          <input type="text" id="bDepartmen" name="ac_Departmen" rows="4" cols="50"></input><br><br>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="Ititle">Internship Title:</label></b>
          <input type="text" id="Ititle" name="ac_ititle"><br><br>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="begdate"> Beginning Date:</label></b>
          <input type="date" id="begdate" name="ac_begdate"><br><br>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="enddate"> Ending Date:</label></b>
          <input type="date" id="enddate" name="ac_enddate"><br><br>
        </div>
        <div class="right">
          <b><label for="cr">Credits:</label></b>
          <input type="number" id="cr" name="ac_credit"><br><br>
          <b><label for="hpw">Hours Per Week:</label></b>
          <input type="number" id="hpw" name="ac_hpw"><br><br>
          <b><label for="Internship">Internship is:</label></b><br><br>
          <label for="bpaid">Paid</label>
          <input type="radio" id="bpaid" name="bpaid" value="paid">
          <label for="paid">Unpaid</label>
          <input type="radio" id="bpaid" name="bpaid" value="unpaid">
        </div>
        <br><br><br><br><br><br>
      </div>
    </div>

  </div>
  <div class="body_one">
    <h2><u>Internship Objectives/Learning Activities</u></h2>
    <ol>
      <li>
        <b>Internship Objectives:</b><br><br>
        Student will :
        <ul>
          <li>Exposure to the current technological developments, industrial environment and sharpen the real time technical / managerial skills required at the job for personal development.</li>
          <li>Learn the Technical knowledge in real industrial situations and develop an application and also able to do technical documentation on work with all the industrial ethics.
          <li>Understand the various aspects of industry which influence the working of organization, learn psychology of the workers and their habits, attitudes and approach to problem solving to become future employers/employee.</li>
      </li>
      </ul>
      </li><br><br>
      <li><b>Learning Activities:</b><br><br>
        On the job:Following Listed activities need to be completed by the intern student:
        <ul>
          <li>Daily report to respective Company/Organization</li>
          <li>To complete the training on one of the advanced/ Current Technology</li>
          <li>To develop a module by using trained technology</li>
          <li>Timely report to college for various evaluation and submit the various formats required for completion of internship (Student Diary, attendance sheet, Internship Certificate, feedback form, etc)</li>
        </ul>
      </li><br><br>
      <li>
        <b>Teaching/Mentoring Activities</b><br><br>
        Following Listed activities need to be completed by the academic mentor of students:
        <ul>
          <li>Timidly visit to the intern company/Organization by following the rule and regulation of respective company/organization</li>
          <li>Monitor the progress of allotted intern and mentor him if required.</li>
          <li>Communicate with the industry mentor and collect the feedback form and any suggestion if given</li>
        </ul>
      </li>
    </ol>
    <br><br>
    <h2><u>The Internship Evaluation Details:</u></h2>
    <p>Evaluation of the internship project is as per following parameters:</p><br><br>
    <table style="width:90%;" class="center">
      <tr>
        <th>Sr no.:</th>
        <th>Project Progresst</th>
        <th>Distribution of marks out of 100</th>
        <th>Rubrics</th>
      </tr>
      <tr>
        <td style="text-align:center;">1.</td>
        <td style="text-align:center;">Title Seminar and Progress Seminar-I (Evaluation by PAC)</td>
        <td style="text-align:center;">10 Marks</td>
        <td>
          <ul>
            <li>SRS(Software requirement specification) (4)</li>
            <li>Analysis (6)</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td style="text-align:center;">2.</td>
        <td style="text-align:center;">Progress Seminar-II (Evaluation by PAC)</td>
        <td style="text-align:center;">10 Marks</td>
        <td>
          <ul>
            <li>Design (4)</li>
            <li>Demonstration of working prototype (6)</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td style="text-align:center;">3.</td>
        <td style="text-align:center;">Evaluation by PQAI</td>
        <td style="text-align:center;">20 Marks</td>
        <td>
          <ul>
            <li>Communication (5)</li>
            <li>Project knowledge (15)</li>
            <li>Presentation (05)</li>
            <li>Completion Status (05)</li>
            <li>Innovativeness (05)</li>
            <li>Efforts taken (05)</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td style="text-align:center;">4.</td>
        <td style="text-align:center;">End Semester Project Demonstration 60 Marks As per ANNEXURE-A and B and External evaluation grade</td>
        <td style="text-align:center;">60 Marks</td>
        <td>As per ANNEXURE-A and B and External evaluation grade</td>
      </tr>

    </table><br>
    <b>
      <br><br>
      <h2><u>The Internship Evaluation Details:</u></h2>
      <p style="width:90%;" class="center">I undersign students of <input type="number" id="semdate" name="sem"> Semester of <input type="text" id="semdept" name="dept">branch, follows the all the rules and regulations of college as well as the allotted company/organization for internship from <input type="date" id="sembegdate" name="sembegdate"> to <input type="date" id="sem_enddate" name="sem_enddate"></p>
  </div>
  <div id="biodata" style="text-align: center;"><input type="submit" name="submit" value="Submit"></div>
  <br>
  <br>
  <br>

  <br>
  
</form>

<?php include 'student_dash_footer.php' ?>