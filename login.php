<?php
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
	<link rel="stylesheet" href="style.css">
</head>
<body>
          <div class="header">
                <img src="Images/download.jpeg" alt="zalego" style="height: 50px; width:50px;" class="rounded-circle">
                <a href="#" class="navbar-trigger"><span></span></a>
            </div>
            <div class="main">
                <div class="container-fluid">
                       <div class="row">
                            <div class="col-lg-12 bg-light">
                                <div class="card-header bg-dark text-white text-center">
                                    <span>Zalego Training/Admin </span>
                                </div>
                            </div>
                        </div>
                        <div class="img" style=" justify-content: center;
                        align-content: center;">
                            <img src="Images/download.jpeg" alt="zalego" style="height: 70px; width:70px;" class="rounded-circle">
                            <a href="#" class="navbar-trigger"><span></span></a>
                        </div>
                </div>
            </div>
            <div class="card bg-light shadow">
                <form action="login.php" method="POST" >
                    <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter your user name" name="userName">
                    
                  </div>
                    
                    <div class="mb-3">
                      <label for="InputPassword" class="form-label">Password</label>
                      <input type="password" class="form-control" id="Password" name="password">
                    </div>
                   
                   
                    <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
                    <div class="mb-3">
                    <span>Have no account?Sign in <a href="register.php" class="here">here</a></span><br>
                   
                    </div>
                </form>
              </div>
        




<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>