<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Online Addmission 2021-2022</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
  <center>
<?php
include("connection.php");
if(isset($_POST['search'])){
if($_POST['course']='ugg'){
   $searchkey = $_POST['app'];

   $que = "SELECT * FROM ugregistration WHERE app_no LIKE '%$searchkey%'";
   $result = mysqli_query($conn,$que);
    while($row = mysqli_fetch_array($result)){
       ?>
       <form method="POST">
            <div class="col">
                <h1><img src= 'images/Icon.jpg' height="100"/></h1>
            </div>
            <div class="col">
                <h2>BERHAMPORE GIRLS' COLLEGE</h2>
                <p>Govt. Sponsored(Affiliated to the University of Kalyani)<br>
                    Accredited by NAAC: Grade B(2nd Cycle)<br>Berhampore, Murshidabad, West Bengal, India</p><br><br>
            </div>
        </div>
        <table>
           <tr>
            <th><h5>ACKNOWLEDGEMENT SHEET</h5></th>
    </table>
       <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['filep']).'"style="width:100px;height:100px;padding-left:1020px"/>';?> 
       <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['files']).'"style="width:90px;height:50px;padding-left:1000px;"/>';?>
       <P style="color:red">*Please retain this sheet fot further use</P><br>
       <table border="1" cellspacing="0" style="width:1000px;">
         <tr style="height:30px;">
            <td><b style="padding-left:10px">Application Nunber :</b></td>
            <td colspan="5"><b style="padding-left:10px"><?php echo $row['app_no']; ?></b></td>
         </tr>
         <tr style="height:30px;">
            <td ><b style="padding-left:10px">Course :</b></th>
            <td colspan="5"><b style="padding-left:10px"><?php echo $row['course']; ?></b></td>
         </tr>
         <tr style="height:30px;">
            <td><b style="padding-left:10px">Name :</b></td>
            <td><b style="padding-left:10px"><?php echo $row['fname']; ?>&nbsp;<?php echo $row['mname']; ?>&nbsp;<?php echo $row['lname']; ?></b></td>
            <td><b style="padding-left:10px"> Date Of Birth :</b></td>
            <td><b style="padding-left:10px"><?php echo $row['dob']; ?></b></td>
            <td><b style="padding-left:10px"> Blood Group :</b></td>
            <td><b style="padding-left:10px"><?php echo $row['bloodgroup']; ?></b></td>
         </tr>
         <tr style="height:50px;">
            <td><b style="padding-left:10px">Address :</b></td>
            <td colspan="5"><b style="padding-left:10px"><?php echo $row['address1']; ?>&nbsp;-<?php echo $row['pincode']; ?>,India </b></td>
         </tr>
         <tr style="height:30px;">
            <td><b style="padding-left:10px">Mobile No. :</b></td>
            <td colspan="5"><b style="padding-left:10px"><?php echo $row['number1']; ?></b></td>
         </tr>
         <tr style="height:30px;">
            <td><b style="padding-left:10px">Email ID :</b></td>
            <td colspan="5"><b style="padding-left:10px"><?php echo $row['email']; ?></b></td>
         </tr>
         <tr style="height:30px;">
            <td><b style="padding-left:10px">Religion :</b></td>
            <td><b style="padding-left:10px"><?php echo $row['religion']; ?></b></td>
            <td><b style="padding-left:10px"> Category :</b></td>
            <td><b style="padding-left:10px"><?php echo $row['caste']; ?></b></td>
            <td><b style="padding-left:10px"> Nationality :</b></td>
            <td><b style="padding-left:10px"> INDIAN</b></td>
         </tr>
       </table><br>
       <table border="1" cellspacing="0" style="width:1000px;">
         <tr style="height:30px;">
            <td><b style="padding-left:10px">Father's name :</b></td>
            <td colspan="3"><b style="padding-left:10px"><?php echo $row['ffname']; ?>&nbsp;<?php echo $row['fmname']; ?>&nbsp;<?php echo $row['flname']; ?></b></td>
         </tr>
         <tr style="height:30px;">
            <td><b style="padding-left:10px">Mother's name :</b></td>
            <td colspan="3"><b style="padding-left:10px"><?php echo $row['mfname']; ?>&nbsp;<?php echo $row['mmname']; ?>&nbsp;<?php echo $row['mlname']; ?></b></td>
         </tr>
         <tr style="height:30px;">
            <td><b style="padding-left:10px">Guardian's name :</b></td>
            <td colspan="3"><b style="padding-left:10px"><?php echo $row['gfname']; ?>&nbsp;<?php echo $row['gmname']; ?>&nbsp;<?php echo $row['glname']; ?></b></td>
         </tr>
         <tr style="height:30px;">
            <td><b style="padding-left:10px">Guardian relation :</b></td>
            <td><b style="padding-left:10px"><?php echo $row['relation']; ?></b></td>
            <td><b style="padding-left:10px">Guardian's mobile :</b></td>
            <td><b style="padding-left:10px"><?php echo $row['gnum']; ?></b></td>
         </tr>
    </table><br><br>
    <h5>Academic Details:-</h5>
    <table border="1" cellspacing="0" style="width:1000px;">
       <tr style="height:30px;">
          <th><b>Course</b></th>
          <th><b>Board/Council</b></th>
          <th><b> School Name </b></th>
          <th><b>Year</b></th>
          <th><b>Marks Obtained</b></th>
          <th><b>Full marks</b></th>
          <th><b>%Average</b></th>
       </tr>
       <tr style="height:30px;">
          <th><b>Class XII</b></th>
          <th><b><?php echo $row['board1']; ?></b></th>
          <th><b><?php echo $row['schoolxii']; ?></b></th>
          <th><b><?php echo $row['yearpxii']; ?></b></th>
          <th><b><?php echo $row['marksobxii']; ?></b></th>
          <th><b><?php echo $row['marksfullxii']; ?></b></th>
          <th><b><?php echo $row['marksavgxii']; ?></b></th>
       </tr>
       <tr style="height:30px;">
          <th><b>Class X</b></th>
          <th><b><?php echo $row['board']; ?></b></th>
          <th><b><?php echo $row['schoolx']; ?></b></th>
          <th><b><?php echo $row['yearp']; ?></b></th>
          <th><b><?php echo $row['marksobx']; ?></b></th>
          <th><b><?php echo $row['marksfullx']; ?></b></th>
          <th><b><?php echo $row['marksavgx']; ?></b></th>
       </tr>
    </table><br>
    <table border="1" cellspacing="0" style="width:1000px;">
       <tr style="height:30px;">
       <th><b>Are you covid vaccinated? </b></th>
          <th><b><?php echo $row['covid']; ?></b></th>
       </tr>
    </table><br><br>
        <div>
         <button onclick="window.print()" type="submit" name="download" style="text-align: center;height: 30px;font-size: 15px;padding:20px;justify-content: space-between;}">Print</button>
       <button style=" text-align: center;height: 30px;font-size: 15px;padding:20px;justify-content: space-between;}"><?php echo "<td><a href=\"pay.php?id=$row[app_no]\" >PAY now</a>" ?></button>
        </div></form>
       <?php
      }
      
   }
      if($_POST['course']='general'){
          $searchkey = $_POST['app'];

          $que = "SELECT * FROM general WHERE app_no LIKE '%$searchkey%'";
          $result = mysqli_query($conn,$que);
           while($row = mysqli_fetch_array($result)){
            ?>
            <form method="POST">
                 <div class="col">
                     <h1><img src= 'images/Icon.jpg' height="100"/></h1>
                 </div>
                 <div class="col">
                     <h2>BERHAMPORE GIRLS' COLLEGE</h2>
                     <p>Govt. Sponsored(Affiliated to the University of Kalyani)<br>
                         Accredited by NAAC: Grade B(2nd Cycle)<br>Berhampore, Murshidabad, West Bengal, India</p><br><br>
                 </div>
             </div>
             <table>
                <tr>
                 <th><h5>ACKNOWLEDGEMENT SHEET</h5></th>
         </table>
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['filep']).'"style="width:100px;height:100px;padding-left:1020px"/>';?> 
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['files']).'"style="width:90px;height:50px;padding-left:1000px;"/>';?>
            <P style="color:red">*Please retain this sheet fot further use</P><br>
            <table border="1" cellspacing="0" style="width:1000px;">
              <tr style="height:30px;">
                 <td><b style="padding-left:10px">Application Nunber :</b></td>
                 <td colspan="5"><b style="padding-left:10px"><?php echo $row['app_no']; ?></b></td>
              </tr>
              <tr style="height:30px;">
                 <td ><b style="padding-left:10px">Course :</b></th>
                 <td colspan="5"><b style="padding-left:10px"><?php echo $row['course']; ?></b></td>
              </tr>
              <tr style="height:30px;">
                 <td><b style="padding-left:10px">Name :</b></td>
                 <td><b style="padding-left:10px"><?php echo $row['fname']; ?>&nbsp;<?php echo $row['mname']; ?>&nbsp;<?php echo $row['lname']; ?></b></td>
                 <td><b style="padding-left:10px"> Date Of Birth :</b></td>
                 <td><b style="padding-left:10px"><?php echo $row['dob']; ?></b></td>
                 <td><b style="padding-left:10px"> Blood Group :</b></td>
                 <td><b style="padding-left:10px"><?php echo $row['bloodgroup']; ?></b></td>
              </tr>
              <tr style="height:50px;">
                 <td><b style="padding-left:10px">Address :</b></td>
                 <td colspan="5"><b style="padding-left:10px"><?php echo $row['address1']; ?>&nbsp;-<?php echo $row['pincode']; ?>,India </b></td>
              </tr>
              <tr style="height:30px;">
                 <td><b style="padding-left:10px">Mobile No. :</b></td>
                 <td colspan="5"><b style="padding-left:10px"><?php echo $row['number1']; ?></b></td>
              </tr>
              <tr style="height:30px;">
                 <td><b style="padding-left:10px">Email ID :</b></td>
                 <td colspan="5"><b style="padding-left:10px"><?php echo $row['email']; ?></b></td>
              </tr>
              <tr style="height:30px;">
                 <td><b style="padding-left:10px">Religion :</b></td>
                 <td><b style="padding-left:10px"><?php echo $row['religion']; ?></b></td>
                 <td><b style="padding-left:10px"> Category :</b></td>
                 <td><b style="padding-left:10px"><?php echo $row['caste']; ?></b></td>
                 <td><b style="padding-left:10px"> Nationality :</b></td>
                 <td><b style="padding-left:10px"> INDIAN</b></td>
              </tr>
            </table><br>
            <table border="1" cellspacing="0" style="width:1000px;">
              <tr style="height:30px;">
                 <td><b style="padding-left:10px">Father's name :</b></td>
                 <td colspan="3"><b style="padding-left:10px"><?php echo $row['ffname']; ?>&nbsp;<?php echo $row['fmname']; ?>&nbsp;<?php echo $row['flname']; ?></b></td>
              </tr>
              <tr style="height:30px;">
                 <td><b style="padding-left:10px">Mother's name :</b></td>
                 <td colspan="3"><b style="padding-left:10px"><?php echo $row['mfname']; ?>&nbsp;<?php echo $row['mmname']; ?>&nbsp;<?php echo $row['mlname']; ?></b></td>
              </tr>
              <tr style="height:30px;">
                 <td><b style="padding-left:10px">Guardian's name :</b></td>
                 <td colspan="3"><b style="padding-left:10px"><?php echo $row['gfname']; ?>&nbsp;<?php echo $row['gmname']; ?>&nbsp;<?php echo $row['glname']; ?></b></td>
              </tr>
              <tr style="height:30px;">
                 <td><b style="padding-left:10px">Guardian relation :</b></td>
                 <td><b style="padding-left:10px"><?php echo $row['relation']; ?></b></td>
                 <td><b style="padding-left:10px">Guardian's mobile :</b></td>
                 <td><b style="padding-left:10px"><?php echo $row['gnum']; ?></b></td>
              </tr>
         </table><br><br>
         <h5>Academic Details:-</h5>
         <table border="1" cellspacing="0" style="width:1000px;">
            <tr style="height:30px;">
               <th><b>Course</b></th>
               <th><b>Board/Council</b></th>
               <th><b> School Name </b></th>
               <th><b>Year</b></th>
               <th><b>Marks Obtained</b></th>
               <th><b>Full marks</b></th>
               <th><b>%Average</b></th>
            </tr>
            <tr style="height:30px;">
               <th><b>Class XII</b></th>
               <th><b><?php echo $row['board1']; ?></b></th>
               <th><b><?php echo $row['schoolxii']; ?></b></th>
               <th><b><?php echo $row['yearpxii']; ?></b></th>
               <th><b><?php echo $row['marksobxii']; ?></b></th>
               <th><b><?php echo $row['marksfullxii']; ?></b></th>
               <th><b><?php echo $row['marksavgxii']; ?></b></th>
            </tr>
            <tr style="height:30px;">
               <th><b>Class X</b></th>
               <th><b><?php echo $row['board']; ?></b></th>
               <th><b><?php echo $row['schoolx']; ?></b></th>
               <th><b><?php echo $row['yearp']; ?></b></th>
               <th><b><?php echo $row['marksobx']; ?></b></th>
               <th><b><?php echo $row['marksfullx']; ?></b></th>
               <th><b><?php echo $row['marksavgx']; ?></b></th>
            </tr>
         </table><br>
         <table border="1" cellspacing="0" style="width:1000px;">
            <tr style="height:30px;">
            <th><b>Are you covid vaccinated? </b></th>
               <th><b><?php echo $row['covid']; ?></b></th>
            </tr>
         </table><br><br>
             <div>
              <button onclick="window.print()" type="submit" name="download" style="text-align:center; height: 30px;font-size: 15px; padding:20px; justify-content: space-between;}" > Print</button>
            <button style=" text-align: center;height: 30px;font-size: 15px;padding:20px;
         justify-content: space-between;}"> <?php echo "<a href=\"pay.php?id=$row[app_no]\" >PAY NOW " ?></button>
             </div></form>
            <?php
            die();
               }
         }
            
      if($_POST['course']='pgg'){
          $searchkey = $_POST['app'];

          $que = "SELECT * FROM pgregistration WHERE app_no LIKE '%$searchkey%'";
          $result = mysqli_query($conn,$que);
             while($row = mysqli_fetch_array($result)){
               ?>
               <form method="POST">
                    <div class="col">
                        <h1><img src= 'images/Icon.jpg' height="100"/></h1>
                    </div>
                    <div class="col">
                        <h2>BERHAMPORE GIRLS' COLLEGE</h2>
                        <p>Govt. Sponsored(Affiliated to the University of Kalyani)<br>
                            Accredited by NAAC: Grade B(2nd Cycle)<br>Berhampore, Murshidabad, West Bengal, India</p><br><br>
                    </div>
                </div>
                <table>
                   <tr>
                    <th><h5>ACKNOWLEDGEMENT SHEET</h5></th>
            </table>
               <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['filep']).'"style="width:100px;height:100px;padding-left:1020px"/>';?> 
               <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['files']).'"style="width:90px;height:50px;padding-left:1000px;"/>';?>
               <P style="color:red">*Please retain this sheet fot further use</P><br>
               <table border="1" cellspacing="0" style="width:1000px;">
                 <tr style="height:30px;">
                    <td><b style="padding-left:10px">Application Nunber :</b></td>
                    <td colspan="5"><b style="padding-left:10px"><?php echo $row['app_no']; ?></b></td>
                 </tr>
                 <tr style="height:30px;">
                    <td ><b style="padding-left:10px">Course :</b></th>
                    <td colspan="5"><b style="padding-left:10px"><?php echo $row['course']; ?></b></td>
                 </tr>
                 <tr style="height:30px;">
                    <td><b style="padding-left:10px">Name :</b></td>
                    <td><b style="padding-left:10px"><?php echo $row['fname']; ?>&nbsp;<?php echo $row['mname']; ?>&nbsp;<?php echo $row['lname']; ?></b></td>
                    <td><b style="padding-left:10px"> Date Of Birth :</b></td>
                    <td><b style="padding-left:10px"><?php echo $row['dob']; ?></b></td>
                    <td><b style="padding-left:10px"> Blood Group :</b></td>
                    <td><b style="padding-left:10px"><?php echo $row['bloodgroup']; ?></b></td>
                 </tr>
                 <tr style="height:50px;">
                    <td><b style="padding-left:10px">Address :</b></td>
                    <td colspan="5"><b style="padding-left:10px"><?php echo $row['address1']; ?>&nbsp;-<?php echo $row['pincode']; ?>,India </b></td>
                 </tr>
                 <tr style="height:30px;">
                    <td><b style="padding-left:10px">Mobile No. :</b></td>
                    <td colspan="5"><b style="padding-left:10px"><?php echo $row['number1']; ?></b></td>
                 </tr>
                 <tr style="height:30px;">
                    <td><b style="padding-left:10px">Email ID :</b></td>
                    <td colspan="5"><b style="padding-left:10px"><?php echo $row['email']; ?></b></td>
                 </tr>
                 <tr style="height:30px;">
                    <td><b style="padding-left:10px">Religion :</b></td>
                    <td><b style="padding-left:10px"><?php echo $row['religion']; ?></b></td>
                    <td><b style="padding-left:10px"> Category :</b></td>
                    <td><b style="padding-left:10px"><?php echo $row['caste']; ?></b></td>
                    <td><b style="padding-left:10px"> Nationality :</b></td>
                    <td><b style="padding-left:10px"> INDIAN</b></td>
                 </tr>
               </table><br>
               <table border="1" cellspacing="0" style="width:1000px;">
                 <tr style="height:30px;">
                    <td><b style="padding-left:10px">Father's name :</b></td>
                    <td colspan="3"><b style="padding-left:10px"><?php echo $row['ffname']; ?>&nbsp;<?php echo $row['fmname']; ?>&nbsp;<?php echo $row['flname']; ?></b></td>
                 </tr>
                 <tr style="height:30px;">
                    <td><b style="padding-left:10px">Mother's name :</b></td>
                    <td colspan="3"><b style="padding-left:10px"><?php echo $row['mfname']; ?>&nbsp;<?php echo $row['mmname']; ?>&nbsp;<?php echo $row['mlname']; ?></b></td>
                 </tr>
                 <tr style="height:30px;">
                    <td><b style="padding-left:10px">Guardian's name :</b></td>
                    <td colspan="3"><b style="padding-left:10px"><?php echo $row['gfname']; ?>&nbsp;<?php echo $row['gmname']; ?>&nbsp;<?php echo $row['glname']; ?></b></td>
                 </tr>
                 <tr style="height:30px;">
                    <td><b style="padding-left:10px">Guardian relation :</b></td>
                    <td><b style="padding-left:10px"><?php echo $row['relation']; ?></b></td>
                    <td><b style="padding-left:10px">Guardian's mobile :</b></td>
                    <td><b style="padding-left:10px"><?php echo $row['gnum']; ?></b></td>
                 </tr>
            </table><br><br>
            <h5>Academic Details:-</h5>
            <table border="1" cellspacing="0" style="width:1000px;">
               <tr style="height:30px;">
                  <th><b>Course</b></th>
                  <th><b>Board/Council</b></th>
                  <th><b> School Name </b></th>
                  <th><b>Year</b></th>
                  <th><b>Marks Obtained</b></th>
                  <th><b>Full marks</b></th>
                  <th><b>%Average</b></th>
               </tr>
               <tr style="height:30px;">
                  <th><b>Class XII</b></th>
                  <th><b><?php echo $row['board1']; ?></b></th>
                  <th><b><?php echo $row['schoolxii']; ?></b></th>
                  <th><b><?php echo $row['yearpxii']; ?></b></th>
                  <th><b><?php echo $row['marksobxii']; ?></b></th>
                  <th><b><?php echo $row['marksfullxii']; ?></b></th>
                  <th><b><?php echo $row['marksavgxii']; ?></b></th>
               </tr>
               <tr style="height:30px;">
                  <th><b>Class X</b></th>
                  <th><b><?php echo $row['board']; ?></b></th>
                  <th><b><?php echo $row['schoolx']; ?></b></th>
                  <th><b><?php echo $row['yearp']; ?></b></th>
                  <th><b><?php echo $row['marksobx']; ?></b></th>
                  <th><b><?php echo $row['marksfullx']; ?></b></th>
                  <th><b><?php echo $row['marksavgx']; ?></b></th>
               </tr>
            </table><br>
            <table border="1" cellspacing="0" style="width:1000px;">
               <tr style="height:30px;">
                  <th ><b>Graduation Degree</b></th>
                  <th><b>University</b></th>
                  <th><b> College Name </b></th>
                  <th><b>Year</b></th>
                  <th><b>Marks Obtained</b></th>
                  <th><b>Full marks</b></th>
                  <th><b>%Average</b></th>
               </tr>
               <tr style="height:30px;">
                  <th><b>BA/B.Sc</b></th>
                  <th rowspan="2"><b><?php echo $row['university']; ?></b></th>
                  <th rowspan="2"><b><?php echo $row['college']; ?></b></th>
                  <th rowspan="2"><b><?php echo $row['yearc']; ?></b></th>
                  <th rowspan="2"><b><?php echo $row['marksobc']; ?></b></th>
                  <th rowspan="2"><b><?php echo $row['marksfullc']; ?></b></th>
                  <th rowspan="2"><b><?php echo $row['marksavgc']; ?></b></th>
               </tr><br>
            <table border="1" cellspacing="0" style="width:1000px;">
               <tr style="height:30px;">
              <br> <th><b>Are you covid vaccinated? </b></th>
                  <th><b><?php echo $row['covid']; ?></b></th>
               </tr>
            </table><br><br>
                <div>
                 <button onclick="window.print()" type="submit" name="download" style=" text-align: center; height: 30px;font-size: 15px;padding:20px;justify-content: space-between;}" > Print</button>
               <button style=" text-align: center;height: 30px;font-size: 15px;padding:20px;justify-content: space-between;}"><?php echo "<a href=\"pay.php?id=$row[app_no]\">PAY NOW</a>" ?></button>
                </div></form>
               <?php
               die();
             }
         }
      
  }?> 
 </center>
</body>
</html>