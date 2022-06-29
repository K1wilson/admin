<?php
require_once('connection.php');
if(isset($_POST['submitbutton']))
{       $userName=$_POST['userName'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirmpassword=$_POST['confirmpassword'];
        $passhash=md5($password);
        //look if my username exists in my database
        $sqlUsername=mysqli_query($connect,"SELECT*From register WHERE userName='$userName'");
        $checkUsername=mysqli_num_rows($sqlUsername);
        //check for email
        $sqlEmail=mysqli_query( $connect,"SELECT*FROM register WHERE email='$email'" );
        $checkEmail=mysqli_num_rows($sqlEmail);
        //if to count number of rows
        if($checkUsername !=0){
            $msg="Username already exist";

        }
        elseif($checkEmail !=0){$msg="Email alreday in use.please try a different email address";}
       //confirm password
       elseif($password!=$confirmpassword){$msg="Passwords do not match";}
       //subit data
       else{
        //create insert query
             $sql=mysqli_query($connect,"INSERT INTO register (userName,email,password)
             VALUES('$userName','$email','$passhash') ");
        if($sql){$msg="Data submitted successfully";}
        else{$msg="Error";}
    }

}
?>
