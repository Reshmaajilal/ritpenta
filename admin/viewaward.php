<?php

/**
 * @Author: indran
 * @Date:   2018-11-18 11:50:48
 * @Last Modified by:   indran
 * @Last Modified time: 2018-11-18 17:44:14
 */


include_once('includes/header.php');

?>
<?php

if (isset($_POST['make_delete'])) {
	$action = 0;


	$id = isit('id', $_POST, 0 );
	$id = unIndexMe((int) $id );

	if($_POST['make_delete'] == 1)
		$action = 1;


	$params = array(
		'awrd_delete' => $action
	); 

	$istrue = updateTable( 'nss_awards', $params, ' awrd_id = ' . $id , $db);

	if($istrue){

		$message [0] = 1;
		$message [1] = ' updated ';  

	}  else {

		$message [0] = 4;
		$message [1] = ' update error ';  
	}

}

?>



<div class="content-wrapper">


	<div class="row">
		<div class="col">

			<?php 





			echo show_error($message); ?>


		</div>
	</div>

	<div class="row bg-white">
		<div class="col-sm-12">



			<div class="page-header">
				<div class="h3 mb-3 bg-primary text-white"><h1>Award Details</h1>
				</div>
			</div>


			<div class="table-responsive">
				
				<table class="table dataTable table-hover ">
					<thead>
						<tr>  
							<th scope="col">Award name</th>
							<th scope="col">Award date</th>
							<th scope="col">description</th> 
							<th class="text-uppercase">added time</th> 
							<th class="text-uppercase">delete</th>
							<th class="text-uppercase">more</th>

						</tr>
					</thead>

					<tbody>

						<?php
						$stmnt=' SELECT * FROM `nss_awards` ';

						$details = $db->display($stmnt);

						?>

						<?php foreach ($details as $key => $value): ?>

							<tr>

								<td><?php echo $value['awrd_name']; ?></td>

								<td><?php echo $value['awrd_date']; ?></td>

								<td><?php echo $value['awrd_detls']; ?></td>




								<td >

									<time class="timeago" datetime="<?php echo isit('awrd_ddate', $value); ?>" title="<?php echo isit('awrd_ddate', $value); ?>">1 hour ago</time>



								</td>

								<td >
									<form accept="" method="post">
										<input type="hidden" name="id" value="<?php echo indexMe( (int) isit('awrd_id', $value, 0)); ?>">
										<?php if( isit('awrd_delete', $value) == 0 ): ?>
											<button class="btn btn-sm btn-danger" name="make_delete" value="1">delete</button>
											<?php else: ?>
												<button class="btn btn-sm btn-success" name="make_delete" value="0">active</button>
											<?php endif; ?>
										</form>


									</td>
									<td>

										<a title="edit" href="admin/imageaward/<?php echo indexMe((int)isit('awrd_id', $value, 0)); ?>" class="btn btn-sm btn-success ">
											<i class="ti-image"></i>
										</a>
										<a title="edit" href="admin/viewaward/<?php echo indexMe((int)isit('awrd_id', $value, 0)); ?>" class="btn btn-sm btn-info ">
											<i class="ti-eye"></i>
										</a>
										<a title="edit" href="admin/editaward/<?php echo indexMe((int)isit('awrd_id', $value, 0)); ?>" class="btn btn-sm btn-warning ">
											<i class="ti-pencil-alt"></i>
										</a>
									</td>



								</tr>


							<?php endforeach; ?>
						</tbody>
					</table>


				</div>





			</div> 
		</div>












	</div>








	<?php include_once('includes/footer.php'); ?>