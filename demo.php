<?php
session_start();
include('dbcon.php');
if(isset($_GET['id'])){
    $userid=$_GET['id'];
    $user = $auth->getUser($userid);
    $email=$user->email;
    $actionCodeSettings = [
        'continueUrl' => 'http://localhost/firebase/psd.php',
        'handleCodeInApp' => true,
    ];
$res=$auth->sendPasswordResetLink($email);
if($res){
$_SESSION['status']='Password Reset Email sent';
header('location: editusers.php');
}else{
    $_SESSION['status']='Password Reset Email not sent';
header('location: users.php');
}
}
?>