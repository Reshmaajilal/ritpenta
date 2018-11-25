		// $message=' value already exists';
<?php

include_once('../global.php')?>
<?php include_once('../root/functions.php')?>
<?php
auth_login();

include_once('includes/header.php'); ?>




<?php






include_once('../root/connection.php');
$db=  new Database();
$message=array(null,null);
//$message='';














if(isset($_POST['submit'])){

	$req_name         =  $_POST['req_name'];
	$req_bg        =  $_POST['req_bg'];
	$req_mob      =  $_POST['req_mob'];
	$req_email         =  $_POST['req_email'];
	$req_loc        =  $_POST['req_loc'];
	$req_date        = $_POST['req_date'];





/*

	$stmnt=" SELECT * FROM nss_camp_reg WHERE cp_name= '" . $cp_name ."' ";





$result = $db->display( $stmnt);
	if( $result ){

		$message [0] = 2;
		$message [1] = 'already exists'; 

	} else {
		*/



$stmnt =  'insert into nss_bg_reqst(req_name,req_bg,req_mob,req_email,req_loc,req_date) values(:req_name,:req_bg,:req_mob,:req_email,:req_loc,:req_date)';





$params=array(

         
		':req_name'        =>  $req_name,
		':req_bg'       =>  $req_bg,
		':req_mob'         =>  $req_mob,
		':req_email'            =>  $req_email,
        ':req_loc'            =>  $req_loc,
         ':req_date'           => $req_date

	);


		$istrue=$db->execute_query($stmnt,$params);

		if($istrue){
					//$message=' added!';

					   $message [0] = 1;
                      $message [1] = ' Successfully Requested '; 



				}
				else
				{
			//$message=$istrue;	
	
		// $message=' value already exists';

		   $message [0] = 3;
           $message [1] = ' something is wrong'; 
       }

}




?>





































     <div class="container mt-4">
       <div class="darken-grey-text mb-4"">
          <div class="row">
           <div class="col-md-8 mb-4">
             <div class="card">
             	<div class="card-body">

<form class="form-horizontal bordered-row" id="bldreq"  action="" method="post" data-parsley-validate>

    	                   
    	                    <div class="page-header">
							  <h3 class="h3 mb-3 font-weight-normal danger-text" align="center">Need Blood</h3>
							</div>







						<div class="form-group">
							
							<div class="input-group">
								<input type="text" class="form-control"  placeholder="Name" name="req_name" data-parsley-required="true" data-parsley-type="number">
							</div>
						</div>



							
							

		                     
		                <div class="form-group">
					
						<div class="input-group">
							<select name="req_bg" class="form-control"   required>
							  <option>select</option>
							  <option>A+</option>
							  <option>A-</option>
							  <option>B+</option>
							  <option>B-</option>
							  <option>O+</option>
							  <option>O-</option>
							  <option>AB+</option>
							  <option>AB-</option>
							</select>
							</div>
 

							



							<div class="form-group">
									
									<div class="input-group">
										<input type="text" class="form-control"  placeholder="Phone No" name="req_mob" data-parsley-required="true" data-parsley-type="number">
									</div>
							</div>	



							<div class="form-group">
									
									<div class="input-group">
										<input type="email" class="form-control"  placeholder="Email Id" name="req_email" data-parsley-required="true" data-parsley-type="">
									</div>
							</div>	

								





							<div class="form-group" >

									<div class="">
                                          <textarea class="form-control" type="text" id="req_loc" rows="5" placeholder="Location" name="
                                          req_loc" data-parsley-required="true"  ></textarea> 
                                </div>
                            </div>






						    <div class="form-group" >
							  <input class="form-control" type="date" name="req_date">
							  </div>


							<div class="container">
							    <button type="submit" class="btn btn-lg btn-outline-primary btn-block" name="submit">Submit</button>
							</div>





					



</form>
</div>
</div>
</div>
</div>
</div>
</div>


  </body>
</html> 
