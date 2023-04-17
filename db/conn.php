<?php
ob_start();
session_start();

$connection = mysqli_connect('localhost','root','','clg-timetable');

if(!$connection){
    echo "Database not connected";
    die;
}

if(!$_SESSION['isLoggedIn']){
    header('location: login.php');
}else{
    $isLoggedIn = $_SESSION['isLoggedIn'];
    $loginUserId = $_SESSION['loginUserId'];
    $loginUserRole = $_SESSION['role'];
}

?>