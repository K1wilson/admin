<?php
require_once('logics/dbconnection.php');
$deleteinfo=mysqli_query($connect,"DELETE FROM enroll WHERE no='".$_GET['id']."'");
if($deleteinfo)
{echo "User deleted succesfully";
 header('location:students.php');
}
else{
   echo "Error deleting";
}
?>