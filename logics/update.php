<?php
require_once('logics/dbconnection.php');
if(isset($_POST['update']))
{
	//fetch form data
	$fullname=$_POST['fullname'];
	$phonenumber=$_POST['phonenumber'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$course=$_POST['course'];
	
	//sql query
	$update= mysqli_query($connect,"UPDATE enroll SET fullname='$fullname',phonenumber='$phonenumber',email='$email',gender='$gender',course='$course'
	 WHERE no=' ".$_GET['id']." ' ");

	if($update){
		$msg="successfull update";
	}
	else{
		$msg="message not updated successfully";
	}
	

}
?>