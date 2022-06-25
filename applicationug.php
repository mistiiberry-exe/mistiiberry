<?php
  include("connection.php");
?>

<!DOCTYPE html>
<HTML>
    <Head>
        <title>BGC Application Form for UG</title>
        <link rel="stylesheet" type="text/css"href="style.css">

    </Head>
    <body>
        <div class="row1">
        <div class="coln">
            <img src= 'images/Icon.jpg' height="100"/>
        </div>
        <div class="col1">
            <h1>BERHAMPORE GIRLS' COLLEGE</h1>
            <p5 style="padding-left:70px;"><b>ONLINE APPLICATION FORM FOR BGCEE 2021-2022</b></p5>
        </div>
        </div>
        <div class="applicationform">
            <form id="applicationform" method="post" action="ug_next.php" enctype="multipart/form-data">
            <label for="course"><b>Course :</b></label>
            <select name="course" id="course" >
                <option>Choose course</option>
                <optgroup label="BA">
                    <option>BA English hons</option>
                    <option>BA Bengali hons</option>
                    <option>BA Sanskrit hons</option>
                    <option>BA history hons</option>
                    <option>BA Philosophy hons</option>
                    <option>BA Political Science hons</option>
                    <option>BA Sociology hons</option>
                    <option>BA Geography hons</option>
                    <option>BA Economics hons</option>
                    <option>BA Physical Education hons</option>
                </optgroup>
                <optgroup label="B.Sc">
                    <option>B.Sc Mathematics hons</option>
                    <option>B.Sc Physics hons</option>
                    <option>B.Sc Chemistry hons</option>
                    <option>B.Sc Computer Science hons</option>
                    <option>B.Sc Botany hons</option>
                    <option>B.Sc Zoology hons</option>
                    <option>B.Sc physiology hons</option>
                    <option>B.Sc Geography hons</option>
                    <option>B.Sc Economics hons</option>
                    <option>B.Sc Environmental Science hons</option>
                </optgroup>
            </select><br><br>
            <center> <h8 style="font-size:25px;">Personal details-<br></h8> </center><br>
            <div class="name">
               <label><b> Name : </b> </label>
               <input type="text" name="fname" id="name" placeholder="First name">
               <input type="text" name="mname" id="name" placeholder="Middle name">
               <input type="text" name="lname" id="name" placeholder="Last name"><br><br>
           </div>
            <label for="dob"><b>Date of birth :</b></label>
            <input type="date" name="dob" class="name" placeholder="Date of birth">
            <label for="bloodgroup"><b>Blood Group :</b></label>
            <select name="bloodgroup" class="blood">
                <option>Choose Blood Group</option>
                <option>A+</option>
                <option>O+</option>
                <option>B+</option>
                <option>AB+</option>
                <option>A-</option>
                <option>O-</option>
                <option>B-</option>
                <option>AB-</option>
            </select><br><br>
            <label for="address"><b>Address :</b></label>
            <input type="address" name="address1" id="address" placeholder="Address">
            <label for="pincode"><b>Pincode :</b></label>
            <input type="num" name="pincode" id="number" placeholder="Pincode" maxlength="6">
            <label for="stat"><b>State :</b></label>
            <select name="stat" id="blood">
            <option>Choose State</option>
                <option>Andhra Pradesh</option>
                <option>Arunachal Pradesh</option>
                <option>Assam</option>
                <option>Bihar</option>
                <option>Chhattishgarh</option>
                <option>Goa</option>
                <option>Gujrat</option>
                <option>Haryana</option>
                <option>Himachal Pradesh</option>
                <option>Jammu And Kashmir</option>
                <option>Jharkhand</option>
                <option>Karnataka</option>
                <option>Kerala</option>
                <option>Madhya Pradesh</option>
                <option>Maharashtra</option>
                <option>Manipur</option>
                <option>Meghalaya</option>
                <option>Mizoram</option>
                <option>Nagaland</option>
                <option>Odisha</option>
                <option>Punjab</option>
                <option>Rajasthan</option>
                <option>Sikkim</option>
                <option>Tamil Nadu</option>
                <option>Telengana</option>
                <option>Tripura</option>
                <option>Uttar Pradesh</option>
                <option>Uttrakhand</option>
                <option>West Bengal</option>
            </select><br><br>
            <label for="email"><b>Email :</b></label>
            <input type="email"name="email" id="name"placeholder="Email">
            <label for="number"><b>Mobile Number :</b></label>
            <select id="num">
                <option>+91</option>
            </select>
            <input type="string" name="number1" id="name"placeholder=" Mobile number" maxlength="10"><br><br>
            <label for="religion"><b>Religion :</b></label>
            <input type="radio"name="religion"value="Hindu">
            <label for="Hindu">Hindu</label>
            <input type="radio"name="religion"value="Muslim">
            <label for="Muslim">Muslim</label>
            <input type="radio"name="religion"value="Others">
            <label for="Others">Others</label>&nbsp;&nbsp;  

            <label for="Caste"><b> Caste :</b></label>
            <select name="caste" class="cast">
                <option>Choose Caste</option>
                <option>General</option>
                <option>SC</option>
                <option>ST</option>
                <option>OBC</option>
            </select>
            <label for="nationality"><b>  Nationality :</b></label>
            <select name="nationality"class="cast">
                <option>Indian</option>
            </select><br><br>
            <label for="fathername"><b>Father's Name :</b></label>
            <input type="text"name="ffname"id="name"placeholder="First name">
            <input type="text"name="fmname"id="name"placeholder="Middle name">
            <input type="text"name="flname"id="name"placeholder="Last name"><br><br>

            <label for="mfname"><b>Mother's Name :</b></label>
            <input type="text"name="mfname"id="name"placeholder="First name">
            <input type="text"name="mmname"id="name"placeholder="Middle name">
            <input type="text"name="mlname"id="name"placeholder="Last name"><br><br> 

            <label for="gfname"><b>Guardian's Name :</b></label>
            <input type="text"name="gfname"id="name"placeholder="First name">
            <input type="text"name="gmname"id="name"placeholder="Middle name">
            <input type="text"name="glname"id="name"placeholder="Last name"><br><br>

            <label for="relation"><b>Guardian relation :</b></label>
            <select name="relation"id="num">
                <option>Choose relation</option>
                <option>Father</option>
                <option>Husband</option>
                <option>Brother</option>
                <option>Mother</option>
                <option>Sister</option>
                <option>Others</option>
            </select><br><br>
            <label for="occupation"><b>Guardian's Occupation :</b></label>
            <input type="text"name="occupation"id="name"placeholder="Guardian's Occupation">
            <label for="gnum"><b>Guardian's Contact Number :</b></label>
            <select id="num">
                <option>+91</option>
            </select>
            <input type="text" name="gnum" id="num" placeholder="Guardian's Contact Number" maxlength="10"><br><br>
           <center> <h8>Academic details-<br></h8> </center>
            <label for="classx"style="font-size:20px;"><b>Class X :-</b></label><BR><br>
                <label for="board"><b>Board/Council :</b></label>
                <input type="text" name="board" id="name"placeholder="Board">
                <label for="Schoolx"><b>School Name :</b></label>
                <input type="text"name="schoolx"id="name"placeholder="School name">
                <label for="yearp"><b>Passing Year :</b></label>
                <select name="yearp"id="num">
                    <option>Choose Year</option>
                    <option>2019</option>
                    <option>2018</option>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                </select><br><br>
                <label for="marksobx"><b>Marks Obtained :</b></label>
                <input type="num"name="marksobx"id="name"placeholder="Marks Obtained"maxlength="3">
                <label for="marksfullx"><b> Marks :</b></label>
                <input type="num"name="marksfullx"id="name"placeholder="Full Marks"maxlength="3">
                <label for="marksavgx"><b>% Average :</b></label>
                <input type="num"name="marksavgx"id="name"placeholder="%"maxlength="2"><br><br>

                <label for="classxii"style="font-size:20px;"><b>Class XII :-</b></label><BR><br>
                    <label for="board1"><b>Board/Council :</b></label>
                    <input type="text" name="board1" id="name"placeholder="Board">
                    <label for="Schoolxii"><b>School Name :</b></label>
                    <input type="text"name="schoolxii"id="name"placeholder="School name">
                    <label for="yearpxii"><b>Passing Year :</b></label>
                    <select name="yearpxii"id="num">
                        <option>Choose year</option>
                        <option>2021</option>
                        <option>2020</option>
                        <option>2019</option>
                        <option>2018</option>
                        <option>2017</option>
                    </select><br><br>
                    <label for="marksobxii"><b>Marks Obtained :</b></label>
                    <input type="num"name="marksobxii"id="name"placeholder="Marks Obtained"maxlength="3">
                    <label for="marksfullxii"><b>Full Marks :</b></label>
                    <input type="num"name="marksfullxii"id="name"placeholder="Full Marks"maxlength="3">
                    <label for="marksavgxii"><b>% Average :</b></label>
                    <input type="num"name="marksavgxii"id="name"placeholder="%"maxlength="2"><br><br>
                    <label for="filep"><b>Upload your phpto :</b></label>
                    <input type="file"name="filep"placeholder="choose file">
                    <label for="files"><b>Upload your Signature :</b></label>
                    <input type="file"name="files"placeholder="choose file"><br><br>
                    <label for="covid"><b>Are you covid vaccinated?</b> </label>
                    <select name="covid"id="num">
                        <option>Choose</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select><br><br>
                    
         <div class="submit">
            <button type="submit" name="submit" >SUBMIT</button>
            </div> 
        </form>
        </div>
    </body>
</html>
