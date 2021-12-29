<?php include 'student_dash_header.php'; 

$conn = mysqli_connect("localhost", "root", "", "ipms") or die("Connection Failed");
$sql = "SELECT * FROM info WHERE email_id='$username'";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YCCE - Student Biodata Form</title>
    <script src="https://cdn.tailwindcss.com/"></script>
</head>
<style>
    input[type="radio"]+label span {
        transition: background .2s,
            transform .2s;
    }

    input[type="radio"]+label span:hover,
    input[type="radio"]+label:hover span {
        transform: scale(1.2);
    }

    input[type="radio"]:checked+label span {
        background-color: #1F9D55;
        box-shadow: 0px 0px 0px 2px white inset;
    }

    input[type="radio"]:checked+label {
        color: #1F9D55;
    }

    input[type="text"]::placeholder {

        /* Firefox, Chrome, Opera */
        text-align: left;
    }

    input[type="email"]::placeholder {

        /* Firefox, Chrome, Opera */
        text-align: left;
    }
</style>

<body>
    <section class=" py-1 bg-blueGray-50" style="margin-bottom: 12%;">
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h1 class="text-blueGray-700 font-bold" style="font-size: 1.75rem;">
                            Contact Details of Students, Industry & Academic Mentor
                        </h1>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form action="biodataConnection.php" method="POST">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            STUDENT DETAILS
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Student Name:
                                    </label>
                                    <input style="font-weight: bold;" readonly value="<?php echo $row['fname'];?> <?php echo $row['lname']; ?>" style="width: 20rem; font-size: medium;" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="stud_name">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Enrollment Number:
                                    </label>
                                    <input style="font-weight: bold;" value="<?php echo $row['regNo']; ?>" readonly name="stud_eno" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Year:
                                    </label>
                                    <input required placeholder="Year" style="width: 20rem;" name="stud_year" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Campus Address:
                                    </label>
                                    <input required placeholder="Campus Address" name="stud_cAddresss" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Mobile Number:
                                    </label>
                                    <input required placeholder="Mobile Number" name="stud_phone" type="tel" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Email ID:
                                    </label>
                                    <input readonly style="font-weight: bold;" value="<?php echo $row['email_id']; ?>" name="stud_email" type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        State:
                                    </label>
                                    <select required style="height: 3.5rem;" name="stud_state" class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="State">
                                        <option value="" selected>Choose Your State</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        City:
                                    </label>
                                    <input required name="stud_city" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="City">
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Industrial Supervisor
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Name:
                                    </label>
                                    <input required style="width: 20rem;" name="sup_name" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="" placeholder="Name">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Title:
                                    </label>
                                    <input required name="sup_title" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="" placeholder="Title">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Organization:
                                    </label>
                                    <input required style="width: 20rem;" name="sup_org" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="" placeholder="Organization">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Internship Campus Address:
                                    </label>
                                    <input required name="ic_addresss" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="" placeholder="Internship Campus Address">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Mobile Number:
                                    </label>
                                    <input required name="sup_phone" type="tel" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Mobile Number">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Email ID:
                                    </label>
                                    <input placeholder="Email Id" required name="sup_email" type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        State:
                                    </label>
                                    <select required style="height: 3.5rem;" name="sup_state" class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="State">
                                        <option value="" selected>Choose Your State</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        City:
                                    </label>
                                    <input required name="sup_city" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="City">
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Faculty mentor
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Name:
                                    </label>
                                    <input required style="width: 20rem;" name="fac_name" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="" placeholder="Name">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Address:
                                    </label>
                                    <input required name="fac_addresss" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="" placeholder="Address">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Mobile Number:
                                    </label>
                                    <input required name="fac_phone" type="tel" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Mobile Number">
                                </div>
                            </div>
                        </div>


                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Academic Credit Information
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Department:
                                    </label>
                                    <input required name="ac_Departmen" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="" placeholder="Department">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Internship Title:
                                    </label>
                                    <input required name="ac_ititle" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="" placeholder="Internship Title">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Beginning Date:
                                    </label>
                                    <input required name="ac_begdate" type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Begining Date">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Ending Date:
                                    </label>
                                    <input required name="ac_enddate" type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Ending Date">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Credits:
                                    </label>
                                    <input required name="ac_credit" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Credits">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Hour per week:
                                    </label>
                                    <input required name="ac_hpw" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Hour per week">
                                </div>
                            </div>

                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Internship is:
                                    </label>
                                    <div class="mx-auto max-w-sm text-center flex flex-wrap justify-center">

                                        <div class="flex items-center mr-4 mb-4">
                                            <input required id="radio1" type="radio" name="bpaid" class="hidden" value="Paid" />
                                            <label for="radio1" class="flex items-center cursor-pointer">
                                                <span class="w-4 h-4 inline-block mr-1 border border-grey"></span>
                                                Paid</label>
                                        </div>

                                        <div class="flex items-center mr-4 mb-4">
                                            <input required id="radio2" type="radio" name="bpaid" class="hidden" value="Unpaid" />
                                            <label for="radio2" class="flex items-center cursor-pointer">
                                                <span class="w-4 h-4 inline-block mr-1 border border-grey"></span>
                                                Unpaid</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="body_one">
                                <hr class="mt-6 border-b-1 border-blueGray-300">
                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Internship Objectives/Learning Activities
                                </h6>
                                <ol>
                                    <li>
                                        <b>1) Internship Objectives:</b><br><br>
                                        Student will :
                                        <ul class="list-disc list-inside">
                                            <li class="ml-4">Exposure to the current technological developments, industrial environment and sharpen the real time technical / managerial skills required at the job for personal development.</li>
                                            <li class="ml-4">Learn the Technical knowledge in real industrial situations and develop an application and also able to do technical documentation on work with all the industrial ethics.
                                            <li class="ml-4">Understand the various aspects of industry which influence the working of organization, learn psychology of the workers and their habits, attitudes and approach to problem solving to become future employers/employee.</li>
                                    </li>
                                    </ul>
                                    </li><br><br>
                                    <li><b>2) Learning Activities:</b><br><br>
                                        On the job:Following Listed activities need to be completed by the intern student:
                                        <ul class="list-disc list-inside">
                                            <li class="ml-4">Daily report to respective Company/Organization</li>
                                            <li class="ml-4">To complete the training on one of the advanced/ Current Technology</li>
                                            <li class="ml-4">To develop a module by using trained technology</li>
                                            <li class="ml-4">Timely report to college for various evaluation and submit the various formats required for completion of internship (Student Diary, attendance sheet, Internship Certificate, feedback form, etc)</li>
                                        </ul>
                                    </li><br><br>
                                    <li>
                                        <b>3) Teaching/Mentoring Activities</b><br><br>
                                        Following Listed activities need to be completed by the academic mentor of students:
                                        <ul class="list-disc list-inside">
                                            <li class="ml-4">Timidly visit to the intern company/Organization by following the rule and regulation of respective company/organization</li>
                                            <li class="ml-4">Monitor the progress of allotted intern and mentor him if required.</li>
                                            <li class="ml-4">Communicate with the industry mentor and collect the feedback form and any suggestion if given</li>
                                        </ul>
                                    </li>
                                </ol>
                                <br><br>


                                <hr class="mt-6 border-b-1 border-blueGray-300">
                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    The Internship Evaluation Details:
                                </h6>
                                <p>Evaluation of the internship project is as per following parameters:</p><br><br>
                                <table style="width:100%; border: 1px solid black; border-color: #96D4D4" class="auto">
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
                                    <hr class="mt-6 border-b-1 border-blueGray-300">
                                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                        The Internship Evaluation Details:
                                    </h6>
                                    <p style="width:100%;" class="center">I undersign students of <input required style="width: 7rem; height: 1rem;" type="number" name="sem" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Semester"> Semester of <input required style="width: 14rem; height: 1rem;" name="semdept" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Department">branch, follows the all the rules and regulations of college as well as the allotted company/organization for internship from
                                        <input required style="width: 10rem;height: 1.2rem;" name="sembegdate" type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Starting Date">
                                        to
                                        <input required style="width: 10rem;height: 1.2rem;" name="sem_enddate" type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Ending Date">
                                        .
                                    </p>
                            </div>
                            <div class="mt-10" style="margin-left: 17.4rem;">
                                <input style="width: 10rem;" class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit" value="Submit" name="save">
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php include 'student_dash_footer.php'; ?>