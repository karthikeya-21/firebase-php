<?php
session_start();
include('dbcon.php');

if(isset($_POST['dlt_user'])){
    $uid=$_POST['id'];
    $dlt=$auth->deleteUser($uid);
    if($dlt){
        $_SESSION['status']="USER NOT DELETED";
        header("Location: users.php");
    }else{
        $_SESSION['status']="USER DELETED SUCCESSFULLY";
        unset($_SESSION['verified_user']);
        unset($_SESSION['verifiedIdToken']);
        header("Location: users.php");
    }
}

?>