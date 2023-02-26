<?php
session_start();
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;
include('dbcon.php');

if(isset($_POST['login_btn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    try {
        $user = $auth->getUserByEmail($email);
        $signInResult = $auth->signInWithEmailAndPassword($email, $password);
        $idTokenString=$signInResult->idToken();

        try {
            $verifiedIdToken = $auth->verifyIdToken($idTokenString);
            $uid = $verifiedIdToken->claims()->get('sub');
            $_SESSION['verified_user']=$uid;
            $_SESSION['verifiedIdToken']=$idTokenString;
            $_SESSION['status'] = 'Login Success';
            header('location: home.php');


        } catch (Exception $e) {
            echo 'The token is invalid: ';

        }

    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
        // echo $e->getMessage();
        $_SESSION['status'] = 'NO Email Found';
        header('location: login.php');
        exit();
    }
}

?>