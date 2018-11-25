<?php session_start()?>
<html>
<head>
<title>Employee Details</title>
 <link rel="stylesheet" href="data-table/css/tablestyle.css"> 

</head>
<body>
<a href="empreg.php"> EMPLOYEE REGISTRATION</a><br>
    
    <a href="viewaddstaff.php"> VIWE EMPLOYEE DETAILS</a><br>
    
    <br><br>
    <br>
<form id="editstaff" name="" method="post" action="editstaff1.php">

<table  id="outer1">
  <thead>
    <tr>
      <th colspan="3">EDITING EMPLOYEE DETAILS</th>
    </tr><tr><td>
<?php
$staffid=$_GET['staffid'];
$_SESSION['empno']=$staffid;
include("dbopen.php");
 $sql ="select s.empno,s.name,s.email,s.designation,s.phno,s.department from emp_det s where empno='$staffid';";
      $result = $conn->query($sql);
	  
     
     if ($result->num_rows == 1) {
		 
		   while($row = $result->fetch_assoc()) {
			   
			   ?>
               
               <div id="divform" class="form-style-1">
                 <label>Name:<span class="required">*</span></label><input required="required" id="Text1" type="text" value="<?php echo $row['name'];?>" name="txtname" style="width: 400px" /></div>
                 
                 <div id="divform" class="form-style-1">
                 <label>Dept:<span class="required">*</span></label><input required="required" id="Text1" type="text" value="<?php echo $row['department'];?>" name="txtdept" style="width: 400px" /></div>
                 
                 
               <div id="divform" class="form-style-1">
               <label>Designation:<span class="required">*</span></label>
               <input required="required" id="Text1" type="text" value="<?php echo $row['designation'];?>" name="txtdesign" style="width:400px" /></div>
<div id="divform" class="form-style-1">
                 <label>Email:<span class="required">*</span></label>
                 <input class="required email" id="Text1" type="text" value="<?php echo $row['email'];?>"  name="txtemail" style="width:400px" />
                 </div>
                 <div id="divform" class="form-style-1">
    <label> Contact No:<span class="required">*</span></label><input class="required digits " maxlength="10" minlength="10"  id="Text1" type="text" value="<?php echo $row['phno'];?>" name="txtphno" style="width: 400px;" /></div>
               
               
             

<table align="center" style="padding-top:40px">

      <tr><td><input style="width:200px" id="submit" type="submit" value="SAVE CHANGES" name="submit"/></td>
             
         </tr>
      </table>
      
      </form>

</body>
</html>
  

  <?php 
 }}?>