<?php
$msg="";
require_once('logics/dbconnection.php');
$queryuser= mysqli_query(
	$connect,"SELECT * FROM subscribers WHERE no='".$_GET['id']."'  ");
while($fetchuser= mysqli_fetch_array($queryuser))
{
 
 $email=$fetchuser['email'];
 
 $id=$fetchuser['no'];



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
							<h4 style="color:#ffffff;">Edit Subscribers Us</h4>
							<span style="color:white;"><?php echo $msg?></span>
						</div>
						<!-- edit -->
						<form action="updatesubscribers.php?id=<?php echo $id?> " method="POST">
							
							
							<div class="row">
								<div class="mb-3 col-lg-6">
									<label for="email" class="form-label"><b>
										Email-address:
									</b>

									</label>
									<input type="email" name="email"  class="form-control" placeholder="Please enter your email-address" value="<?php echo $email?>" >
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