<?php
  include 'student_dash_header.php';
?>

<style>
        /* input[type=text] {
            background: transparent;
            border: none;
            border-bottom: 1px solid #000000;
        }
        input[type=number] {
            background: transparent;
            border: none;
            border-bottom: 1px solid #000000;
        }
        input[type=email] {
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
        .left{
            float: left; 
            width: 65%;
        }
        .right{
            float: right; 
            width: 35%
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
  <form action="studentDiaryConnect.php" method="POST">
                      <div class="container">
                        <h2 style="text-align:center;">STUDENT’S WEEKLY DIARY / WEEKLY LOG</h2><br>
                        
                            <div class="left">
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="week">Week:</label></b>
                                <input type="number" id="week" name="week" rows="4" cols="50"></input><br><br>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="diary_dept">Department:</label></b>
                                <input type="text" id="diary_dept" name="diary_dept"><br><br>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="diary_sem">Semester:</label></b>
                                <input type="number" id="diary_sem" name="diary_sem"><br><br>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><label for="pname">Name Of Project:</label></b>
                                <input type="text" id="pname" name="pname"><br><br>
                             </div>
                            <div class="right">
                              
                              <b><label for="diary_date">From:</label></b>
                              <input type="date" id="diary_date" name="diary_date_start"><br><br>
                              <b><label for="diary_date_end">To:</label></b>
                              <input type="date" id="diary_date_end" name="diary_date_end"><br><br>
                              <b><label for="hod_name">HOD Name:</label></b>
                              <input type="text" id="hod_name" name="hod_name"><br><br>
                            </div><br><br><br>
                            
                        
                        <div class="body_one">
                            <h3><u>Main points of the week</u></h3>
                            <textarea name="message" rows="10" cols="100"></textarea></li><br>
                        </div><br><br>
                        
                            <div class="body_one">
                                <h3><u>Fortnightly Progress Report</u></h3>
                                <b><label for="your_name">Student Name:</label></b>
                                <input type="text" id="your_name" name="your_name" rows="4" cols="50"></input><br><br>
                                <b><label for="Institute_name">Institute Name:</label></b>
                                <input type="text" id="Institute_name" name="institute_name" rows="4" cols="50"></input><br><br>
                                <b><label for="dcomp_name">Company name:</label></b>
                                <input type="text" id="dcomp_name" name="comp_name" rows="4" cols="50"></input><br><br>
                                <b><label for="diary_date">From:</label></b>
                                <input type="date" id="diary_date" name="diary_date_from">
                                <b><label for="diary_date_to">To:</label></b>
                                <input type="date" id="diary_date_to" name="diary_date_to"><br><br>
                              </div>
                    
                         
                          
                        
                          <ul class="body_one">
                              <li>If this is your first fortnight in the company, please write a paragraph ( or two)  on this company, covering  all  the relevant information that YOU think will be of use / value to you during your sabbatical. You may add pieces of company information in your subsequent reports. </li><br>
                              <textarea name="que1" rows="8" cols="100"></textarea></li><br><br>
                              <li>Who did you interact with in this period? Which depts. did you visit /work in?</li><br>
                              <textarea name="que2" rows="4" cols="100"></textarea></li><br><br>
                              <li>List down (maximum) three activities carried out by you in this period. Describe each one briefly</li><br>
                              <textarea name="que3" rows="9" cols="100"></textarea></li><br><br>
                              <li>What problems did you face and what did you do to address them? What was the learning that resulted from each of them</li><br>
                              <textarea name="que4" rows="6" cols="100"></textarea></li><br><br>
                              <li>What process (s)/ system(s) did you familiarize yourself with /study as part of your work or out of your interest? </li><br>
                              <textarea name="que5" rows="5" cols="100"></textarea></li><br><br>
                              <li>List down (maximum) three observations you made (related/ not related to your work) in this period.  Pl comment on each of them</li><br>
                              <textarea name="que6" rows="5" cols="100"></textarea></li><br><br>
                              <li>If you have seen anything where an improvement is possible/ required, pl mention / describe that here. Pl also discuss this with the concerned person in the company</li><br>
                              <textarea name="que7" rows="5" cols="100"></textarea></li><br><br>
                              <li>In what different ways you(and your colleagues) can help the company in this regard ?</li><br>
                              <textarea name="que8" rows="6" cols="100"></textarea></li><br><br>
                              <li>What did you find novel/ exciting / valuable during this period?</li><br>
                              <textarea name="que9" rows="4" cols="100"></textarea></li><br><br>
                              <li>You have seen and handled / worked on many things / aspects in this period. What ,acc to you, can be of use to your instt and students and in what ways</li><br>
                              <textarea name="que10" rows="6" cols="100"></textarea></li><br><br>
                              <li>What do you plan to do during the next fortnight?</li><br>
                              <textarea name="que11" rows="4" cols="100"></textarea></li><br><br>
                              <li>Have you been able to complete everything that you had planned last fortnight? If not, what have you not completed and why? </li><br>
                              <textarea name="que12" rows="5" cols="100"></textarea></li><br><br>
                              <li>Any Suggestion</li><br>
                              <textarea name="que13" rows="4" cols="100"></textarea></li><br><br>
                          </ul>
                          <div>
                            <b><label for="students_name">Name Of Student:</label></b>
                            <input type="text" id="students_name" ><br><br>
                          </div>
                          <div style="text-align: center;"><input type="submit" name="submit" value="Submit"></div>
                          <br>
  <br>
  <br>
  <br>
                        </div>
                      </div>
                      </form>
</body>
<?php
  include 'student_dash_footer.php';
?>

