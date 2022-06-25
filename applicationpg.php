<?php
  include("connection.php");
?>

<!DOCTYPE html>
<HTML>
    <Head>
        <title>BGC Application Form for PG</title>
        <link rel="stylesheet" type="text/css"href="style.css">

    </Head>
    <body>
        <div class="row1">
        <div class="coln">
            <img src= 'images/Icon.jpg' height="100"/>
        </div>
        <div class="col1">
            <h1>BERHAMPORE GIRLS' COLLEGE</h1>
            <p5 style="padding-left:70px;"><b>ONLINE APPLICATION FORM FOR BGCEEPG 2021-2022</b></p5>
        </div>
        </div>
        <div class="applicationform">
            <form id="applicationform"method="post"action="pg_next.php" enctype="multipart/form-data">
            <label for="selectt"><b>Course :</b></label>
            <select name="course" id="course">
                <option>Choose Course</option>
                <optgroup label="MA">
                    <option>MA Bengali </option>
                    <option>MA English </option>
                    <option>MA history</option>
                    <option>MA Geography </option>
                    <option>MA Sanskrit </option>
                    <option>MA Sociology</option>
                    <option>MA Political Science </option>
                    <option>MA Philosophy</option>
                </optgroup>
                <optgroup label="M.Sc">
                    <option>M.Sc Mathematics </option>
                    <option>M.Sc Physics</option>
                    <option>M.Sc Chemistry</option>
                    <option>M.Sc Botany</option>
                    <option>M.Sc Physiology </option>
                    <option>M.Sc Zoology</option>
                    <option>M.Sc Computer Science </option>
                    <option>M.Sc Economics</option>
                    <option>M.Sc Geography</option>
                </optgroup>
            </select><br><br>
            <center> <h8 style="font-size:25px;">Personal details-<br></h8> </center><br>
            <div class="name">
                <label for="fname"><b>Name : </b> </label>
               <input type="text"name="fname"id="name"placeholder="First name">
               <input type="text"name="mname"id="name"placeholder="Middle name">
               <input type="text"name="lname"id="name"placeholder="Last name"><br><br>
           </div>
            <label for="DOb"><b>Date of birth :</b></label>
            <input type="date" name="dob" id="name"placeholder="Date of birth">
             <label for="bloodgroup"><b>Blood Group :</b></label>
            <select name="bloodgroup" id="blood">
                <option>Choose blood group</option>
                <option>A+</option>
                <option>O+</option>
                <option>B+</option>
                <option>AB+</option>
                <option>A-</option>
                <option>0-</option>
                <option>B-</option>
                <option>AB-</option>
            </select><br><br>
            <label for="address"><b>Address :</b></label>
            <input type="address"name="address1" id="address"placeholder="Address">
            <label for="Pincode"><b>Pincode :</b></label>
            <input type="num"name="pincode"id="number"placeholder="Pincode"maxlength="6">
            <label for="state"><b>State :</b></label>
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
            <input type="email"name="email"id="name"placeholder="Email">
            <label for="number"><b>Mobile Number :</b></label>
            <select id="num">
                <option>+91</option>
            </select>
            <input type="num"name="number1"id="number"placeholder=" Mobile number" maxlength="10"><br><br>
            <label for="religion"><b>Religion :</b></label>
            <input type="radio"name="religion"value="Hindu">
            <label for="Hindu">Hindu</label>
            <input type="radio"name="religion"value="Muslim">
            <label for="Muslim">Muslim</label>
            <input type="radio"name="religion"value="Others">
            <label for="Others">Others</label>&nbsp;&nbsp;  

            <label for="Cast"><b> Caste :</b></label>
            <select name="caste" id="cast">
            <option>Choose Caste</option>
                <option>General</option>
                <option>SC</option>
                <option>ST</option>
                <option>OBC</option>
            </select>
            <label for="nationality"><b>  Nationality :</b></label>
            <select name="nationality"id="cast">
                <option>Indian</option>
            </select><br><br>
            <label for="faname"><b>Father's Name :</b></label>
            <input type="text"name="ffname"id="name"placeholder="First name">
            <input type="text"name="fmname"id="name"placeholder="Middle name">
            <input type="text"name="flname"id="name"placeholder="Last name"><br><br>

            <label for="mname"><b>Mother's Name :</b></label>
            <input type="text"name="mfname"id="name"placeholder="First name">
            <input type="text"name="mmname"id="name"placeholder="Middle name">
            <input type="text"name="mlname"id="name"placeholder="Last name"><br><br> 

            <label for="gname"><b>Guardian's Name :</b></label>
            <input type="text"name="gfname"id="name"placeholder="First name">
            <input type="text"name="gmname"id="name"placeholder="Middle name">
            <input type="text"name="glname"id="name"placeholder="Last name"><br><br>

            <label for="relation"><b>Guardian relation :</b></label>
            <select name="relation"id="num">
            <option>Choose Relation</option>
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
            <input type="num"name="gnum"id="name"placeholder="Guardian's Contact Number" maxlength="10"><br><br>
            <center> <h8>Academic details-<br></h8> </center>
            <label for="classx"style="font-size:20px;"><b>Class X :-</b></label><BR><br>
                <label for="Board"><b>Board/Council :</b></label>
                <input type="text"name="board"id="name"placeholder="Board">
                <label for="Schoolx"><b>School Name :</b></label>
                <input type="text"name="schoolx"id="name"placeholder="School name">
                <label for="yearp"><b>Passing Year :</b></label>
                <select name="yearp"id="num">
                    <option>2019</option>
                    <option>2018</option>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                </select><br><br>
                <label for="marksob"><b>Marks Obtained :</b></label>
                <input type="num"name="marksobx"id="name"placeholder="Marks Obtained"maxlength="3">
                <label for="marksfull"><b> Marks :</b></label>
                <input type="num"name="marksfullx"id="name"placeholder="Full Marks"maxlength="3">
                <label for="marksavg"><b>% Average :</b></label>
                <input type="num"name="marksavgx"id="name"placeholder="%"maxlength="2"><br>

                <label for="classx"style="font-size:20px;"><b>Class XII :-</b></label><BR><br>
                    <label for="Board"><b>Board/Council :</b></label>
                    <input type="text"name="board1"id="name"placeholder="Board">
                    <label for="Schoolx"><b>School Name :</b></label>
                    <input type="text"name="schoolxii"id="name"placeholder="School name">
                    <label for="yearp"><b>Passing Year :</b></label>
                    <select name="yearpxii"id="num">
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

                    <label for="classx"style="font-size:20px;"><b>Graduation :-</b></label><BR><br>
                <label for="Board"><b>University Name :</b></label>
                <input type="text"name="university"id="name"placeholder="University">
                <label for="Schoolx"><b>College Name :</b></label>
                <input type="text"name="college"id="name"placeholder="College name">
                <label for="yearc"><b> Year :</b></label>
                <select name="yearc"id="num">
                    <option>2018-2019</option>
                    <option>2017-2018</option>
                    <option>2016-2017</option>
                    <option>2015-2016</option>
                    <option>2014-2015</option>
                </select><br><br>
                <label for="marksobc"><b>Marks Obtained :</b></label>
                <input type="num"name="marksobc"id="name"placeholder="Marks Obtained">
                <label for="marksfullc"><b>Full Marks :</b></label>
                <input type="num"name="marksfullc"id="name"placeholder="Full Marks">
                <label for="marksavgc"><b>% Average :</b></label>
                <input type="num"name="marksavgc"id="name"placeholder="%"maxlength="2"><br><br>
                    <label for="filep"><b>Upload your phpto :</b></label>
                    <input type="file"name="filep"placeholder="choose file">
                    <label for="files"><b>Upload your Signature :</b></label>
                    <input type="file"name="files"placeholder="choose file"><br><br>
                    <label for="covid"><b>Are you covid vaccinated?</b> </label>
                    <select name="covid"id="num">
                        <option>choose</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select><br><br>
                    
            <div class="submit">
            <button type="submit" name="submit" >SUBMIT</button>
            </div>
        </form>

        </div>
    </body>
</HTML>