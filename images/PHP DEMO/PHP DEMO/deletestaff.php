<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("dbopen.php");

$staffid=$_GET['staffid'];		 
$sql ="delete from emp_det where empno='$staffid';";
     // $result = $conn->query($sql);
	  if ($conn->query($sql)==TRUE)  {
		  
					echo '<script type="text/javascript"> alert("Deleted Successfully");
                     location.replace("viewaddstaff.php");
                     </script> ';  
					  
				  }
				  
else {
	
			 echo '<script type="text/javascript"> alert("Deletion failed");
                     location.replace("viewaddstaff.php");
                     </script>'; 
				}
				
				
	



?>
</body>
</html>