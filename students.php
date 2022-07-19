<?php
$msg="";
require_once('logics/dbconnection.php');
require_once('logics/processadd.php');
$sql = mysqli_query($connect,"SELECT * FROM enroll");
?>
<!DOCTYPE html>
<html>

<?php 
require_once('logics/processadd.php');
require_once('includes/links.php')?>
<body>
	
	<!-- All our code. write here   -->
	<?php require_once('includes/header.php')?> 
	<?php require_once('includes/sidebar.php')?>
	<div class="main-content">
		<div class="container-fluid">
				<div class="row" style="width:100% ;">
					<div class="col-lg-12">
						<div class="card-header bg-dark text-white text-center">
							<span>Student Table</span>
							<a href="#" class="btn btn-lg btn-sm btn-danger pull-right" data-toggle="modal" data-target="#addUserForm">
                            <i class="fa fa-plus-circle"></i>
						    </a>
							<span class="text-success"><?php echo $msg ?></span>		
						</div>
						<div class="card-body">
						<table class="table table-striped table-hover table-responsive "  style="font-size:12px;">
							<thead>
								<tr>
								<th scope="col">id</th>
								<th scope="col">Fullname</th>
								<th scope="col">Phone</th>
								<th scope="col">email</th>
								<th scope="col">course</th>
								<th scope="col">gender</th>
								<th scope="col">Enrolled on</th>
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
								<td><?php echo $fetchrecord['fullname']?></td>
								<td><?php echo $fetchrecord['phonenumber']?></td>
								<td><?php echo $fetchrecord['email']?></td>
								<td><?php echo $fetchrecord['course']?></td>
								<td><?php echo $fetchrecord['gender']?></td>
								<td><?php echo $fetchrecord['created_at']?></td>
								<td>
									<a href="editenrollment.php?id=<?php echo $fetchrecord['no']?>" class="btn btn-primary">
									<i class="fa fa-edit"></i></a>
									<a href="view-enrollment.php?id=<?php echo $fetchrecord['no']?>" class="btn btn-primary">
									<i class="fa fa-eye"></i></a>
									<a href="delete.php?id=<?php echo $fetchrecord['no']?>" class="btn btn-danger">
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
	<div class="modal" id="addUserForm" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				 <h4 class="modal-title" id="myModalLabel" >Add new student</h4>
				 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
				
				</div>
				<div class="modal-body"></div>
				        <form action="students.php" method="POST">
							
							<div class="row" >
								<div class="mb-3 col-lg-6" >
									<label for="fullname" class="form-label"><b>
										Fullname:</b></label>
									<input type="text" name="fullname"  class="form-control" placeholder="Please enter your fullname" >
								</div>
								<div class="mb-3 col-lg-6">
									<label for="phonenumber" class="form-label"><b>Phone number:</b></label>
									<input type="number" name="phonenumber" class="form-control"  placeholder="+2547......">
								</div> 
							</div>
							<div class="row">
								<div class="mb-3 col-lg-6">
									<label for="email" class="form-label"><b>
										Email-address:
									</b>

									</label>
									<input type="email" name="email"  class="form-control" placeholder="Please enter your email-address" >
								</div>
								<div class="mb-3 col-lg-6" >
									<label for="gender" class="form-label"><b>
									What's your gender :</b>
									</label>
									<select class="form-select" aria-label="Default select example" name="gender" >
										<option selected style="color:black" >Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>

							</div>
						    <div class="row">
								<div class="mb-3 col-lg-6"   >
									<label for="courses" class="form-label" ><span style="text-align:left;"><b>
									 What's your preferred course</b></span>
									</label>
									<select class="form-select" aria-label="Default select example" name="course" >
										<option selected style="color:grey"></option>
										<option value="Web development">Web development</option>
										<option value="Cyber security">Cyber security</option>
										<option value="Data analysis">Data analysis</option>
										<option value="Android development">Android development</option>
									</select>
								</div>
                            </div>

							<button class="btn btn-primary" name="submit" >Submit details</button>
							
						</form>
				
			</div>
		</div>
	</div>
	<?php require_once('includes/script.php')?>
</body>
</html>