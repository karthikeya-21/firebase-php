<?php
session_start();
include('dbcon.php');
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;

if (isset($_SESSION['verified_user'])){
    $uid=$_SESSION['verified_user'];
    $idTokenString=$_SESSION['verifiedIdToken'];
    try {
        $verifiedIdToken = $auth->verifyIdToken($idTokenString);
         // echo "working";
    } catch (FailedToVerifyToken $e) {
        echo 'The token is invalid: ';
        $_SESSION['status']='FailedToVerifyToken / Token Expired';
        header('Location:logout.php');
        exit();
    }
}else {
    $_SESSION['status']='Login to access Home page';
    header('location:logout.php');
    header('location: login.php');
    exit();
}

?>