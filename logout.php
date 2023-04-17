<?php
ob_start();
session_start();

unset($_SESSION['isLoggedIn']);
unset($_SESSION['loginUserId']);
unset($_SESSION['role']);

session_destroy();

header('location: login.php');
?>