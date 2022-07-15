<!-- student being able to edit data -->
<?php
$msg="";
require_once('logics/dbconnection.php');
$querystudent= mysqli_query(
	$connect,"SELECT * FROM contactus WHERE no='".$_GET['id']."'  ");
while($fetchstudent = mysqli_fetch_array($querystudent))
{
 $firstname=$fetchstudent['firstname'];
 $lastname=$fetchstudent['lastname'];
 $email=$fetchstudent['email'];
 $phonenumber=$fetchstudent['phonenumber'];
 $message=$fetchstudent['message'];
 $id=$fetchstudent['no'];



}
//update user records
require_once('logics/updatecontactus.php')
?>

<!DOCTYPE html>
<html>
<head>
	
	<?php require_once('includes/links.php')?>
</head>
<body>
	
	<!-- All our code. write here   -->
	<?php require_once('includes/header.php')?>
	<?php require_once('includes/sidebar.php')?>
	    <div class="main-content">
	        <div class="container-fluid">
		        <div class="col-lg-12">
		            <div class="card-body shadow">
						<span class="alert alert-success" ><?php echo $msg="";?></span>
						<div class="class-header text-center bg-dark">
							<h4 style="color:#ffffff;">Edit Contact Us <?php echo $firstname?></h4>
							<span style="color:white;"><?php echo $msg?></span>
						</div>
						<!-- edit -->
						<form action="editcontactus.php?id=<?php echo $id?> " method="POST">
							
							<div class="row" >
								<div class="mb-3 col-lg-6" >
									<label for="firstname" class="form-label"><b>
										Firstname:</b></label>
									<input type="text" name="firstname"  class="form-control" placeholder="Please enter your firstname" value="<?php echo $firstname?>">
								</div>
								<div class="mb-3 col-lg-6">
									<label for="lastname" class="form-label"><b>Last name:</b></label>
									<input type="text" name="lastname" class="form-control" value="<?php echo $lastname?>" placeholder="enter your last name">
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
                                <div class="mb-3 col-lg-6">
									<label for="phonenumber" class="form-label"><b>
										Phonenumber:
									</b>

									</label>
									<input type="number" name="phonenumber"  class="form-control" placeholder="Please enter your phonenumber" value="<?php echo $phonenumber?>" >
								</div>
								

							</div>
						    <div class="row">
                                <div class="mb-3 col-lg-6">
									<label for="message" class="form-label"><b>
										Message:
									</b>

									</label>
									<input type="text" name="message"  class="form-control" placeholder="Please enter your message" value="<?php echo $message?>" >
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