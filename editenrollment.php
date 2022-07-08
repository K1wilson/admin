<!-- student being able to edit data -->
<?php
require_once('logics/dbconnection.php');
$querystudent= mysqli_query($connect,
 "SELECT * FROM enroll WHERE no='".$_GET['no']."'  ");
while($fetchstudent = mysqli_fetch_array($querystudent))
{$fullname=$fetchstudent['fullname'];
 $phonenumber=$fetchstudent['phonenumber'];
 $email=$fetchstudent['email'];
 $gender=$fetchstudent['gender'];
 $course=$fetchstudent['course'];


}
//update user records
if(isset($_POST['update']))
{
	//fetch form data
	$fullname=$_POST['fullname'];
	$phonenumber=$_POST['phonenumber'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$course=$_POST['course'];
	//sql query
	$update= mysqli_query($connect,"UPDATE enroll SET fullname='$fullname',phonenumber='$phonenumber',email='$email',gender='$gender',course='$course' WHERE no=' ".$_GET['no']." ' ");

	if($update){
		$msg="message updated succesfully";
	}
	else{
		$msg="message not updated successfully";
	}
	

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
		            <div class="card-body shadow">
						<div class="class-header text-center bg-dark">
							<h4 style="color:#ffffff;">Edit Student <?php echo $fullname?></h4>
						</div>
						<form action="editenrollment.php" method="POST">
							
							<div class="row" >
								<div class="mb-3 col-lg-6" >
									<label for="fullname" class="form-label"><b>
										Fullname:</b></label>
									<input type="text" name="fullname"  class="form-control" placeholder="Please enter your fullname" value="<?php echo $fullname?>">
								</div>
								<div class="mb-3 col-lg-6">
									<label for="phonenumber" class="form-label"><b>Phone number:</b></label>
									<input type="number" name="phonenumber" class="form-control" value="<?php echo $phonenumber?>" placeholder="+2547......">
								</div> 
							</div>
							<div class="row">
								<div class="mb-3 col-lg-6">
									<label for="email" class="form-label"><b>
										Email-address:
									</b>

									</label>
									<input type="email" name="email"  class="form-control" placeholder="Please enter your email-address" value="<?php echo $email?>" >
								</div>
								<div class="mb-3 col-lg-6" >
									<label for="gender" class="form-label"><b>
									What's your gender :</b>
									</label>
									<select class="form-select" aria-label="Default select example" name="gender" >
										<option selected style="color:black"value="<?php echo $gender?>" ><?php echo $gender?></option>
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
										<option selected style="color:grey"><?php echo $course?></option>
										<option value="Web development">Web development</option>
										<option value="Cyber security">Cyber security</option>
										<option value="Data analysis">Data analysis</option>
										<option value="Android development">Android development</option>
									</select>
								</div>
                            </div>

							<button class="btn btn-primary" name="update" >Update details</button>
							
						</form>
		            </div>

                </div>
	        </div>
	    </div>
	
<?php require_once('includes/script.php')?>
</body>
</html>