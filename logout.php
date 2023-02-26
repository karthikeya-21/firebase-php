<?php
session_start();

unset($_SESSION['verified_user']);
unset($_SESSION['verifiedIdToken']);

$_SESSION['status']='Logged Out Successfullly';
header('location: login.php');
exit();
?>