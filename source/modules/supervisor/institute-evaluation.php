<?php
include 'supervisor_dash_header.php';
?>
<style>
  /* input[type=text] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
  } */

  label {
    display: inline-block;
    width: 150px;
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

  input[type=submit] {
    background-color: #3F00FF;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
  }

  .body_one {
    padding-left: 400px;
  }
</style>

<body>
  <form action="institute_evaluationConnect.php" method="POST">
  <div class="container">
    <h2 style="text-align:center;">PERFORMANCE EVALUTION OF INTERNSHIP BY INSTITUTE</h2><br>
    <div class="left">
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="name">Student Name:</label></b>
      <input type="text" id="stude_name" name="stud_name" rows="4" cols="50"></input><br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="roll">College Roll Number:</label></b>
      <input type="text" id="roll" name="roll"><br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="branch">Branch:</label></b>
      <input type="text" id="branch" name="branch"><br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="sem">Semester:</label></b>
      <input type="text" id="sem" name="sem"><br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="h_addresss">Home Address:</label></b>
      <input type="text" id="h_addresss" name="h_addresss"><br><br>

    </div>
    <div class="right">

      <b><label for="m_number">Mobile Number:</label></b>
      <input type="tel" id="phone" name="phone"  required maxlength="13" size="13"><br><br>
      <b><label for="eno">Enrollment Number:</label></b>
      <input type="number" id="eno" name="eno"><br><br>
      <b><label for="period">Period of training<br><i>(in months):</i></label></b>
      <input type="number" id="period" name="period"><br><br>

    </div><br><br>
    <div style="margin-bottom: 10%;">
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="t_addresss" class="label_modify ">Address of Training Site:</label></b>
      <input type="text" id="t_addresss" name="t_addresss" size="30"><br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="p_addresss" class="label_modify ">Address of Training Providing Agency: </label></b>
      <input type="text" id="p_addresss" name="p_addresss" size="30"><br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="name_t" class="label_modify ">Name of training In-charge: </label></b>
      <input type="text" id="name_t" name="name_t" size="30"><br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="name_t" class="label_modify ">Designation of training In-charge: </label></b>
      <input type="text" id="des_t" name="des_t" size="30"><br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="typr_work" class="label_modify ">Type of work: </label></b>
      <input type="text" id="type_work" name="type_work" size="30"><br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="edate" class="label_modify">Date of evaluation:</label></b>
      <input type="date" id="evdate" name="evdate"><br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>
        <p class="label_modify">Attendance: &nbsp&nbsp&nbsp&nbsp</p>
      </b>
      Satisfactory<input type="radio" id="att" name="att" value="Satisfactory">
      Good<input type="radio" id="att" name="att" value="Good">
      Excellent<input type="radio" id="att" name="att" value="Excellent"><br>

      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>
        <p class="label_modify">Practical Work: &nbsp&nbsp&nbsp&nbsp</p>
      </b>
      Satisfactory<input type="radio" id="pw" name="pw" value="Satisfactory">
      Good<input type="radio" id="pw" name="pw" value="Good">
      Excellent<input type="radio" id="pw" name="pw" value="Excellent"><br>

      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>
        <p class="label_modify">Faculty’s Evaluation: &nbsp&nbsp&nbsp&nbsp</p>
      </b>
      Satisfactory<input type="radio" id="fe" name="fe" value="Satisfactory">
      Good<input type="radio" id="fe" name="fe" value="Good">
      Excellent<input type="radio" id="fe" name="fe" value="Excellent"><br>

      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>
        <p class="label_modify">Evaluation of industry: &nbsp&nbsp&nbsp&nbsp</p>
      </b>
      Satisfactory<input type="radio" id="ei" name="ei" value="Satisfactory">
      Good<input type="radio" id="ei" name="ei" value="Good">
      Excellent<input type="radio" id="ei" name="ei" value="Excellent"><br>

      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>
        <p class="label_modify">Overall Grade: &nbsp&nbsp&nbsp&nbsp</p>
      </b>
      Satisfactory<input type="radio" id="grade" name="grade" value="Satisfactory">
      Good<input type="radio" id="grade" name="grade" value="Good">
      Excellent<input type="radio" id="grade" name="grade" value="Excellent"><br><br><br>

      <div id="Institute-evaluation" style="text-align: center;"><input type="submit" name="submit" value="Submit"></div>
      <br>
  <br>
  <br>
  <br>
    </form>
    </div><br>



    <?php
    include 'supervisor_dash_footer.php';
    ?>