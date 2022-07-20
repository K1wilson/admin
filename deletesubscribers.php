<?php
require_once('logics/dbconnection.php');
$deleteinfo=mysqli_query($connect,"DELETE FROM subscribers WHERE no='".$_GET['id']."'");
if($deleteinfo)
{echo "User deleted succesfully";
 header('location:subscribers.php');
}
else{
   echo "Error deleting";
}
?>