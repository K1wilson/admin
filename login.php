<?php
session_start();
//database connection
require_once('connection.php');
//setting
if(isset($_POST['submit']))
{
    //fetch from data
    $userName=$_POST['userName'];
    $password=$_POST['password'];
    $newpass=md5($password);
    //perfom the sql query
    $sql=mysqli_query($connect,"SELECT * FROM register WHERE userName='$userName' or password='$newpass'");
    $fetch=mysqli_fetch_array($sql);

    if($fetch > 0)
    {
        $_SESSION['login']=$userName;
        header('location:index.php');
    }
    else{
        echo "error". mysqli_error($connect);

    }



}
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
	<link rel="stylesheet" href="styleenroll.css">
</head>
<body>
          <div class="header">
                <img src="Images/download.jpeg" alt="zalego" style="height: 50px; width:50px;" class="rounded-circle">
                <a href="#" class="navbar-trigger"><span></span></a>
         </div>
            <div class="main-content">
                <div class="container-fluid">
                       <div class="row">
                            <div class="col-lg-12 bg-light"style="width:50%;">
                                <div class="card-header bg-dark text-white text-center">
                                    <span>Zalego Training/Admin </span>
                                </div>
                            </div>
                        </div>
                        <div class="img" style=" justify-content: center;
                            align-content: center;margin-left:39%;">
                                <img src="Images/download.jpeg" alt="zalego" style="height: 70px; width:70px;" class="rounded-circle">
                                <a href="#" class="navbar-trigger"><span></span></a>
                        </div> 
                    <div class="container register-container" style="padding-top:70px; padding-bottom:10px;width:50%">
                        <div class="card student-register-card shadow" style="padding:20px">
                            <form action="login.php" method="POST" style="padding-bottom: 20px;" id="fnlForm" enctype="multipart/form-data">
                                
                                <div class="container">
                                    <!-- <h3  class="enroll-header"><Register/h3> -->
                                    <h2 class="enroll-header">Login</h2>
                                    <div class="form-row" style="column-gap: 0px; ">
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="email" class="enroll-label">Username</label>
                                            <input type="text" class="form-control br-radius" name="userName" id="email" placeholder="username" required="" autocoplete="on">
                                        </div>
                                    </div>

                                    <div class="form-row" style="column-gap: 0px">
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="inputPassword4" class="enroll-label">Password</label>
                                            <div class="input-icon-container" id="show_hide_password">
                                                <input type="password" class="form-control br-radiu" id="inputPassword" name="password" placeholder="Type your password" value="" required="" autocomplete="current-password">
                                                
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                           <span> Don't have an account?
                                                <a href="register.php" style="text-decoration:underline"> Enroll.</a>
                                            </span>
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-primary" style=" border-radius: 10px; margin-bottom: 15px;" name="submit">Submit
                                    </button>

                                        
                                    </div>



                            </form>

                        </div>
                    </div>	
                </div>
            </div>
        




              <?php require_once('includes/script.php')?>
</body>
</html>