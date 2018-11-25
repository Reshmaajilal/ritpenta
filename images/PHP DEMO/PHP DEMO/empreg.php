<?php
include("dbopen.php");
?>
<html>
<head>
<title>Employee Registration</title>
 <link rel="stylesheet" href="data-table/css/tablestyle.css">
 <?php //include("style.php"); ?>
</head>

   
   
    <body>
    <a href="empreg.php"> EMPLOYEE REGISTRATION</a><br>
    
    <a href="viewaddstaff.php"> VIWE EMPLOYEE DETAILS</a><br>
    
    <br><br>
    <br>
    
<form id="addemp" action = "addemp.php" method = "POST" enctype = "">
<table  id="outer1">
  <thead>
    <tr>
      <th colspan="3">Employee Registeration</th>
    </tr><tr><td>
<div id="divform" class="form-style-1">
<label>Name:<span class="required">*</span></label><input required="required" id="Text1" type="text" name="txtname" style="width: 400px" />
</div>
<div id="divform" class="form-style-1">
<label> Department:<span class="required">*</span></label><input required="required" id="Text1" type="text" name="txtdept" style="width: 400px" />
 </div>
      
<div id="divform" class="form-style-1"><label>Designation:<span class="required">*</span></label>
<input required="required" id="Text1" type="text" name="txtdesign" style="width: 400px" /></div>
<div id="divform" class="form-style-1"><label>Email:<span class="required">*</span></label><input class="required email" id="Text1" type="text" name="txtemail" style="width: 400px" /></div>
<div id="divform" class="form-style-1"><label>Contact No:<span class="required">*</span></label>
<input class="required digits " maxlength="10" minlength="10"  id="Text1" type="text" name="txtphno" style="width:400px;" /></div>
</td></tr></thead></table>
 <table align="center" style="padding-top:40px">

      <tr>
        <td><input style="width:200px" id="submit" type="submit" value="Register" name="submit"/></td>
      
             
         </tr>
      </table>

</form>
</body>
</html>
    