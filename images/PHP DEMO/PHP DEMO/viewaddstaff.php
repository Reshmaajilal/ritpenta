<?php
session_start();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VIEW STAFF DETAILS</title>


</head>


<body>
<a href="empreg.php"> EMPLOYEE REGISTRATION</a><br>
    
    <a href="viewaddstaff.php"> VIWE EMPLOYEE DETAILS</a><br>
    
    <br><br>
    <br>
<form name="" method="post" action="">

<p><h1>Staff Details</h1> </p>
<table border="1" 
           style="background-color: #FFFFFF; width: 955px;" cellpadding="5">
            
            <tr style="font-family: 'Times New Roman', Times, serif; 
                font-size: 18px; font-weight: bold; color: #FFFFFF; 
                background-color: #000000">
                
                
                

<?php
 include("dbopen.php");
 $sql ="select s.empno,s.name,s.email,s.designation,s.phno,s.department from emp_det s;";
      $result = $conn->query($sql);
      
     if ($result->num_rows > 0) {
		  echo '<th>Name</th><th>Designation</th><th>Department</th><th>Mailid</th><th>Contact No</th>
                <th>Edit</th>
                <th>Delete</th></tr>';
				
             // output data of each row
         while($row = $result->fetch_assoc()) {
			 $staffid=$row['empno'];
echo "<tr>";echo "<td>";
echo $row['name'];echo "</td>";
echo "<td>";
echo $row['designation'];echo "</td>";
echo "<td>";
echo $row['department'];echo "</td>";
echo "<td>";
echo $row['email'];echo "</td>";
echo "<td>";
echo $row['phno'];echo "</td>";
echo "<td>"; ?>
<a href="editstaff.php?staffid=<?php echo $staffid;?>" >EDIT </a>
</td>
<td><a href="deletestaff.php?staffid=<?php echo $staffid;?>" >DELETE</a></td>
</tr>
<?php

		 }
	 }
		else
		{
		echo '<td>No RECORDS FOUND</tr>';	
			
		}
?>

 
 </table>
 
 

</form>
</body>
</html>
