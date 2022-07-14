<?php 
$msg='';
require_once('processRegister.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
          <div class="header">
                <img src="Images/download.jpeg" alt="zalego" style="height: 50px; width:50px;" class="rounded-circle">
                <a href="#" class="navbar-trigger"><span></span></a>
          </div>
            <div class="main-content">
                <div class="container-fluid">
                          <div class="row">
                                <div class="col-lg-12 bg-light">
                                    <div class="card-header bg-dark text-white text-center">
                                        <span>Zalego/Admin Register</span>
                                    </div>
                                </div>
                            </div>
                            <div class="img" style=" justify-content: center;
                            align-content: center;margin-left:39%;">
                                <img src="Images/download.jpeg" alt="zalego" style="height: 70px; width:70px;" class="rounded-circle">
                                <a href="#" class="navbar-trigger"><span></span></a>
                            </div> 
                    </div>
                  
                </div>
                <div class="container register-container" style="padding-top:70px; padding-bottom:10px;width:50%">
                              
                     <div class="card student-register-card shadow" style="padding:20px">
                        <form action="register.php" method="POST" style="padding-bottom: 20px;" id="fnlForm" enctype="multipart/form-data">
                            
                            <div class="container">
                              <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Enter your user name" name="userName">
                                    
                              </div>
                                <div class="mb-3">
                                    <label for="Email" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="InputPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="Password">
                                </div>
                                <div class="mb-3">
                                        <label for="InputPassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="Password" name="confirmpassword">
                                </div>
                                
                                <button type="submit" class="btn btn-primary" name="submitbutton">Submit</button>
                                <div class="mb-3">
                                    <span>Have an account? <a href="login.php" class="Login here">Login here</a></span>
                                </div> 
                            </div>
                        </form>

    </div>
</div>	
        




              <?php require_once('includes/script.php')?>
</body>
</html>