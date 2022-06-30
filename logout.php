<?php
//start session
session_start();
//database connection
require_once('connection.php');
//unset session
unset($_SESSION['login']);
//destroy session
session_destroy();
//redirect the user to login page
header('location:login.php');



?>