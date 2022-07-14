<?php 
require_once('logics/dbconnection.php');
$querystudent= mysqli_query(
	$connect,"SELECT * FROM enroll WHERE no='".$_GET['id']."'  ");
while($fetchstudent = mysqli_fetch_array($querystudent))
{
 $fullname=$fetchstudent['fullname'];
 $phonenumber=$fetchstudent['phonenumber'];
 $email=$fetchstudent['email'];
 $gender=$fetchstudent['gender'];
 $course=$fetchstudent['course'];
 $id=$fetchstudent['no'];
 $enrolled=$fetchstudent['created_at'];



}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- this page has been styled using styleenroll.css this is because the card has alraedy been styled hence we neede to create another styleenroll .css -->
    <title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styleenroll.css">
</head>
<body>
	<div class="img">
		
	</div>
	<!-- All our code. write here   -->
	<?php require_once('includes/header.php')?>
	<?php require_once('includes/sidebar.php')?>
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="class-title">Personal Information</h4>
                            
                        </div>
                        <div class="card-body">
                            
                            <ul class="list-group">
                              <li class="list-group-item">Fullname:<span  class="float-right badge badge-primary"><?php echo $fullname?></span></li>
                              <li class="list-group-item">Email:<span class="float-right badge  badge-primary"><?php echo $email?></span></li>
                              <li class="list-group-item">Phone Number:<span class="float-right badge  badge-primary"><?php echo $phonenumber?></span></li>
                            </ul>
                        </div>
                        
                        
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="class-title">Other Information</h4>
                            
                        </div>
                        <div class="card-body">
                            
                            <ul class="list-group">
                              <li class="list-group-item">Gender:<span  class="float-right badge badge-primary"><?php echo $gender?></span></li>
                              <li class="list-group-item">Course:<span class="float-right badge  badge-primary"><?php echo $course?></span></li>
                              <li class="list-group-item">Enrolled on:<span class="float-right badge  badge-primary"><?php echo $enrolled?></span></li>
                              
                            </ul>
                        </div>	
                        
                        
                    </div>

                </div>
			</div>
            <div class="row">
                
			</div>
        </div>
    </div>
	
<?php require_once('includes/script.php')?>
</body>
</html>