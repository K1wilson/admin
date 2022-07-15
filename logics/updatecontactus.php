<?php
require_once('logics/dbconnection.php');
if(isset($_POST['update']))
{
	//fetch form data
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phonenumber=$_POST['phonenumber'];
	$message=$_POST['message'];
	
	//sql query
	$update= mysqli_query($connect,"UPDATE contactus SET firstname='$firstname',lastname='$lastname',email='$email',phonenumber='$phonenumber',message='$message'
	 WHERE no=' ".$_GET['id']." ' ");

	if($update){
		$msg="successfull update";
	}
	else{
		$msg="message not updated successfully";
	}
	

}
?>