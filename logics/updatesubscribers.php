<?php
require_once('logics/dbconnection.php');
if(isset($_POST['update']))
{
	//fetch form data
	
	$email=$_POST['email'];
	
	
	//sql query
	$update= mysqli_query($connect,"UPDATE subscribers SET email='$email'
	 WHERE no=' ".$_GET['id']." ' ");

	if($update){
		$msg="successfull update";
	}
	else{
		$msg="message not updated successfully";
	}
	

}
?>