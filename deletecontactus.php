<?php
require_once('logics/dbconnection.php');
$deleteinfo=mysqli_query($connect,"DELETE FROM contactus WHERE no='".$_GET['id']."'");
if($deleteinfo)
{echo "User deleted succesfully";
 header('location:contactus.php');
}
else{
   echo "Error deleting";
}
?>