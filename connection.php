<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$connect= mysqli_connect($server,$username,$password,$database);
if(!$connect){die ( 'No connection'.mysqli_connect_error());}

?>