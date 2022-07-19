<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";


$connect= mysqli_connect($server,$username,$password,$database);
if( isset($_POST['submit'] ))
{
    //1. fetch form data
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    //submit form data
    $insertData = mysqli_query($connect,"INSERT INTO
        enroll(fullname,phonenumber,email,gender,course)
        VALUES('$fullname','$phonenumber','$email','$gender','$course')");
    if($insertData)
    {$msg="Data submitted";

    }
    else
    {$msg="Data not submitted";}



    
}




?>