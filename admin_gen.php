<?php
   error_reporting(0);
   include("connection.php");
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>UG application details</title>
       <style>
           .my{
            background-color: rgb(222, 185, 236);
           }
       </style>
   </head>
   <body> 
       <?php
       $query= "SELECT * FROM general ";
       $data= mysqli_query($conn,$query);
       $total = mysqli_num_rows($data);
       ?>
       <h3>Applicant's details:-</h3>
                 <table border="2">
                      <tr>
                         <th class="my">Update</th>
                         <th class="my">Delete</th>
                          <th class="my">Application No.</th>
                          <th class="my">Course</th>
                          <th class="my">Name</th>
                          <th class="my">Date Of Birth</th>
                          <th class="my">Blood Group</th>
                          <th class="my">Address</th>
                          <th class="my">Pincode</th>
                          <th class="my">State</th>
                          <th class="my">Email</th>
                          <th class="my">Mobile Number</th>
                          <th class="my">Religion</th>
                          <th class="my">Caste</th>
                          <th class="my">Father's name</th>
                          <th class="my">Mother's name</th>
                          <th class="my">Guardian's name</th>
                          <th class="my">Guardian Relation</th>
                          <th class="my">Guardian Occupation</th>
                          <th class="my">Guardian's contact no</th>
                          <th class="my">Board(X)</th>
                          <th class="my">School Name(X)</th>
                          <th class="my">Passing Year(X)</th>
                          <th class="my">Percentage(X)</th>
                          <th class="my">Board(XII)</th>
                          <th class="my">School Name(XII)</th>
                          <th class="my">Passing year(XII)</th>
                          <th class="my">Percentage(XII)</th>
                          <th class="my">Photo</th>
                          <th class="my">Signature</th>
                      </tr>
                      <?php
                     while($result=mysqli_fetch_array($data)){
                     ?>
                     <tr>
                     <?php echo "<td><a href=\"edit2.php?id=$result[app_no]\" >Edit</a>" ?>
                     <?php echo "<td><a href=\"delete2.php?id=$result[app_no]\">Delete</a>" ?>
                     <?php echo '<td>'.$result['app_no'].'</td>' ?>
                     <?php echo '<td>'.$result['course'].'</td>' ?>
                     <td><?php echo $result['fname']; ?>&nbsp;<?php echo $result['mname']; ?>&nbsp;<?php echo $result['lname']; ?></td>
                     <td><?php echo $result['dob']; ?></td>
                     <td><?php echo $result['bloodgroup']; ?></td>
                     <td><?php echo $result['address1']; ?></td>
                     <td><?php echo $result['pincode']; ?></td>
                     <td><?php echo $result['stat']; ?></td>
                     <td><?php echo $result['email']; ?></td>
                     <td><?php echo $result['number1']; ?></td>
                     <td><?php echo $result['religion']; ?></td>
                     <td><?php echo $result['caste']; ?></td>
                     <td><?php echo $result['ffname']; ?>&nbsp;<?php echo $result['fmname']; ?>&nbsp;<?php echo $result['flname']; ?></td>
                     <td><?php echo $result['mfname']; ?>&nbsp;<?php echo $result['mmname']; ?>&nbsp;<?php echo $result['mlname']; ?></td>
                     <td><?php echo $result['gfname']; ?>&nbsp;<?php echo $result['gmname']; ?>&nbsp;<?php echo $result['glname']; ?></td>
                     <td><?php echo $result['relation']; ?></td>
                     <td><?php echo $result['occupation']; ?></td>
                     <td><?php echo $result['gnum']; ?></td>
                     <td><?php echo $result['board']; ?></td>
                     <td><?php echo $result['schoolx']; ?></td>
                     <td><?php echo $result['yearp']; ?></td>
                     <td><?php echo $result['marksavgx']; ?></td>
                     <td><?php echo $result['board1']; ?></td>
                     <td><?php echo $result['schoolxii']; ?></td>
                     <td><?php echo $result['yearpxii']; ?></td>
                     <td><?php echo $result['marksavgxii']; ?></td>
                    <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['filep']).'"/>';?></td>
                    <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['files']).'"/>';?></td>
                     </tr>
                 <?php
             }
       ?>
       </table>
      
   </body>
   </html>