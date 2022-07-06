<!-- student being able to edit data -->
<?php
require_once('logics/dbconnection.php');
$querystudent= mysqli_query($connect,
 "SELECT * FROM enroll WHERE no='".$_GET['id']."'  ");
while($fetchstudent = mysqli_fetch_array($querystudent))
{$fullname=$fetchstudent['fullname'];

}
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
	<?php require_once('includes/header.php')?>
	<?php require_once('includes/sidebar.php')?>
	<div class="main-content">
		<div class="container-fluid">
		<div class="col-lg-12">
			<div class="card-body">
				<div class="class-header text-center bg-dark">
					<h4 style="color:#ffffff;">Edit Student <?php echo $fullname?></h4>
				</div>
			</div>

        </div>
	    </div>
	</div>
	
<?php require_once('includes/script.php')?>
</body>
</html>