<?php
//start session
session_start();

//Check whether the session variable is present or not
if(!isset($_SESSION['login']) || (trim($_SESSION['login'])=='')){
    header("location:login.php");
    exit();
}

?>