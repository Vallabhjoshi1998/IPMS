<?php
  include 'student_dash_header.php';
?>

<style>
input[type=text] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
    width: 200px;
}

table, th, td {
  border:1px solid black;
  
  padding: 8px;
}
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
.left{
	float: left; 
    width: 45%;
}
.right{
	float: right; 
    width: 55%
}
.center {
  margin-left: auto;
  margin-right: auto;
}
.body_one{
    padding-left: 100px;
}
input[type=submit]{
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
  <form action="attendanceConnection.php" method="POST">
<div class="container">
<h2 style="text-align:center;"><u>ATTENDANCE FORM</u></h2><br><br>
<h3 style="text-align:center;">Name of organisation:</h3>
<div style="text-align:center;"><input type="text" id="name_of_org" name="name_of_org" rows="4" cols="50"></input></div><br>
<h3 style="text-align:center;">Address of organisation:</h3>
<div style="text-align:center;"><input type="text" id="address_of_org" name="address_of_org" rows="4" cols="50"></input></div><br><br>
<div>
 <div class="left">
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="att_name">Student Name:</label></b>
      <input type="text" id="att_name" name="stud_name" rows="4" cols="50"></input><br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="att_rno">College Roll Number:</label></b>
      <input type="text" id="att_rno" name="att_rno"><br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="name_of_course">Name of course:</label></b>
      <input type="text" id="name_of_course" name="name_of_course"><br><br>
   </div>
  <div class="right">
    
  	<b><label for="catt_dater">Commencement date:</label></b>
    <input type="date" id="catt_date" name="comm_date"><br><br>
	<b><label for="comp_att_dater">Completion date:</label></b>
    <input type="date" id="comp_att_date" name="comp_date"><br><br>
  </div><br><br>
  <br>
  <br><br><br><br>
  <br>
  <br><br>
</div>
    <div class="body_one">
        <h3>NOTE:</h3>
        <ul>
            <li>Attendance form should be maintained by the student regularly.</li>
            <Li>Student should tick mark the checkbox to imply that they are present.</Li>
        </ul>
    </div>
    <div style="text-align: center;">
      <b><h3>Mark Attendance for Date</h3></b><br>
    <input type="date" id="att_date" name="att_date"></div>
    <br><br><br>
    <div style="text-align: center;">
    <b><h3>Attendance </h3></b>
    Present<input type="radio" id="attendance" name="attendance" value="present">
    Absent<input type="radio" id="attendance" name="attendance" value="absent">
    </div>
    <br><br>
    <div style="text-align:center;"><h3>Name of internship supervisor:</h3></div>
    <div style="text-align:center;"><input type="text" id="authority_name" name="authority_name" rows="4" cols="50"></input></div><br><br>
    <div style="text-align:center;"><h3>Contact Number</h3></div>
    <div style="text-align:center;"><input type="tel" id="authority_number" name="authority_number" required maxlength="13" size="13"></div><br><br>
</div>
<div id="attendance-form" style="text-align: center;"><input type="submit" name="submit" value="Submit"></div>
<br>
  <br>
  <br>
  <br>
</form>

<?php
  include 'student_dash_footer.php';
?>
