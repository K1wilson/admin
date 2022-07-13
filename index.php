<?php
require_once('logics/dbconnection.php');
//counting number of students
$queryenrolled=mysqli_query($connect,"SELECT * FROM enroll");
$countstudents=mysqli_num_rows($queryenrolled);
//display number of females or males
$querygender=mysqli_query($connect,"SELECT*FROM enroll WHERE gender='Female'");
$countfemale=mysqli_num_rows($querygender)

?>
<!DOCTYPE html>
<html>
<head>
	
	<?php require_once('includes/links.php')?>
</head>

<body>
	<div class="img">
		
	</div>
	<!-- All our code. write here   -->
	<div class="header">
	 <?php require_once('includes/header.php')?>
    </div>
	<?php require_once('includes/sidebar.php')?>
	<div class="main-content">
		<div class="container-fluid">
			   <div class="row">
					<div class="col-lg-12">
						<div class="card-header bg-dark text-white text-center">
							<span>Top content</span>
						</div>
					</div>
		       </div>
			
			    <div class="row">
					<div class="col-lg-3">
						<div class="card-header bg-dark text-white text-center">
							<span>Students</span>

						</div>
						<div class="card-body">
							<span><i class="fa fa-group fa-3x"></i></span>
							<span class="float-right badge bg-dark rounded-pill" style="font-size:22px;"><b style="color:white;"><?php echo $countstudents ?></b></span>
						</div>
						<div class="card-footer"></div>
					</div>
					<div class="col-lg-3">
						<div class="card-header bg-dark text-white text-center">
							<span>Available Courses</span>

						</div>
						<div class="card-body">
							<span><i class="fa fa-folder-open fa-3x"></i></span>
							<span class="float-right"><?php echo $countfemale ?></span>
						</div>
						<div class="card-footer"></div>
					</div>
					<div class="col-lg-3">
						<div class="card-header bg-dark text-white text-center">
							<span>Campuses</span>

						</div>
						<div class="card-body">
							<span><i class="fa fa-graduation-cap fa-3x"></i></span>
							<span class="float-right">00</span>
						</div>
						<div class="card-footer"></div>
					</div>
					<div class="col-lg-3">
						<div class="card-header bg-dark text-white text-center">
							<span>Users</span>

						</div>
						<div class="card-body">
							<span><i class="fa fa-user fa-3x"></i></span>
							<span class="float-right">00</span>
						</div>
						<div class="card-footer"></div>
					</div>
                </div>
				<div class="row" style="width:100% ;">
					<div class="col-lg-12">
						<div class="card-holder bg-dark text-white text-center">
							<span>Student Analysis</span>
						</div>
						<div class="card-body">

							<span><i class="fa fa-line-chart fa-3x" aria-hidden="true"></i></span>
							<span class="float-right"></span></div>
						<div class="card-footer"></div>

					</div>
				</div>
	    </div>
	</div>
	
<?php require_once('includes/script.php')?>
</body>
</html>