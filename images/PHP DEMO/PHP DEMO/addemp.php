<?php

include("dbopen.php");
if (isset($_POST['submit'])) {
	
	$name=$_POST['txtname'];
	$dept=$_POST['txtdept'];
	$designation=$_POST['txtdesign'];
	$email=$_POST['txtemail'];
	$phno=$_POST['txtphno'];	

$sql ="insert into emp_det(name,department,designation,email,phno) value('$name','$dept','$designation','$email','$phno');";

 if($conn->query($sql)== TRUE)
	 { 
	 
	  ?>
		<script type="text/javascript"> alert("Staff Added Successfully");
           location.replace("empreg.php");
          </script> 
		  
<?php	  } 

else
{
	?>
  <script type="text/javascript"> alert("failed");
    location.replace("empreg.php");
    
    </script>  
    
    
<?php
}
}
	
?>