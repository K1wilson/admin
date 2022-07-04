<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$connect= mysqli_connect($server,$username,$password,$database);
$sql = mysqli_query($connect,"SELECT * FROM enroll");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="img">
		
	</div>
	<!-- All our code. write here   -->
	<?php require_once('includes/header.php')?>
	<?php require_once('includes/sidebar.php')?>
	<div class="main-content">
		<div class="container-fluid">
				<div class="row" style="width:100% ;">
					<div class="col-lg-12">
						<div class="card-holder bg-dark text-white text-center">
							<span>Student Table</span>
						</div>
						<div class="card-body">
						<table class="table table-striped table-hover table-responsive ">
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
									<a href="" class="btn btn-primary">
									<i class="fa fa-edit"></i></a>
									<a href="" class="btn btn-primary">
									<i class="fa fa-eye"></i></a>
									<a href="" class="btn btn-danger">
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
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>