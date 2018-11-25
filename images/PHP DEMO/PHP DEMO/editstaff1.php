<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
 include("dbopen.php");

if (isset($_POST['submit'])) {
	
	$staffid=$_SESSION['empno'];
	$name=$_POST['txtname'];
	$dept=$_POST['txtdept'];
	$designation=$_POST['txtdesign'];
	$email=$_POST['txtemail'];
	$phno=$_POST['txtphno'];
	          
$sql ="update emp_det set name='$name',department='$dept',designation='$designation',email='$email',phno='$phno' where empno='$staffid';";
		           //update staff details............
				   
				   
		     if($conn->query($sql)== TRUE) { 
				  
				 
					echo '<script type="text/javascript"> alert("Updated Successfully");
                     location.replace("viewaddstaff.php");
                     </script> ';  
					  
				  }
				   
			 
			 else
			 {
				
				 echo '<script type="text/javascript"> alert("Updation failed");
                     location.replace("viewaddstaff.php");
                     </script>'; 
				}
				
				
			 }
				
			
			?>

</body>
</html>