<?php
require_once('logics/dbconnection.php');
$sql = mysqli_query($connect,"SELECT * FROM subscribers");
?>
<!DOCTYPE html>
<html>

<?php require_once('includes/links.php')?>
<body>
	
	<!-- All our code. write here   -->
	<?php require_once('includes/header.php')?> 
	<?php require_once('includes/sidebar.php')?>
	<div class="main-content">
		<div class="container-fluid">
				<div class="row" style="width:100% ;">
					<div class="col-lg-12">
						<div class="card-holder bg-dark text-white text-center">
							<span>Subscribers Table</span>
						</div>
						<div class="card-body">
						<table class="table table-striped table-hover table-responsive "  style="font-size:12px;">
							<thead>
								<tr>
								<th scope="col">no</th>
								<th scope="col">Email</th>
								<th scope="col">Created on</th>
								<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								//fetch data from enrollment table
								while($fetchrecord= mysqli_fetch_array($sql) ){
								?>
								<tr>
                                <td><?php echo $fetchrecord['no']?></td>								
								<td><?php echo $fetchrecord['email']?></td>								
								<td><?php echo $fetchrecord['created_at']?></td>
								<td>
									<a href="updatesubscribers.php?id=<?php echo $fetchrecord['no']?>" class="btn btn-primary">
									<i class="fa fa-edit"></i></a>
									<a href="viewsubscriber.php?id=<?php echo $fetchrecord['no']?>" class="btn btn-primary">
									<i class="fa fa-eye"></i></a>
									<a href="deletesubscribers.php?id=<?php echo $fetchrecord['no']?>" class="btn btn-danger">
									<i class="fa fa-trash"></i></a>

									
								</td>
								
								</tr>

								<?php 
								}
								?>
								
							</tbody>
						</table>
							
						<div class="card-footer"></div>

					</div>
				</div>
		</div>
	</div>
	
	<?php require_once('includes/script.php')?>
</body>
</html>