<?php
session_start();
include('dbcon.php');

if(isset($_POST['dlt_data'])){
    $id=$_POST['id'];
    $ref_table="name/".$id;
    $dlt=$database->getReference($ref_table)->remove();
    if($dlt){
            $_SESSION['status']="DATA DELETED SUCCESSFULLY" ;
            header("Location: index.php");
        }else{
            $_SESSION['status']="DATA NOT DELETD";
            header("Location: index.php");
        }
    }
if(isset($_POST['update_data'])){
    $id=$_POST['id'];
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $email=$_POST['email'];
    $contact=$_POST['phone'];

    $ref_table="name/".$id;
    $updateData = [
        'first_name' => $fname,
        'last_name' => $lname,
        'email' => $email,
        'phno' => $contact
    ];
    $postRef = $database->getReference($ref_table)->update($updateData);
    if($postRef){
        $_SESSION['status']="DATA UPDATED SUCCESSFULLY" ;
        header("Location: index.php");
    }else{
        $_SESSION['status']="DATA UPDATE FAILED";
        header("Location: index.php");
    }
}

if(isset($_POST['save_data'])){
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $email=$_POST['email'];
    $contact=$_POST['phone'];

    $ref_table="name";
    $postData = [
        'first_name' => $fname,
        'last_name' => $lname,
        'email' => $email,
        'phno' => $contact
    ];
$postRef = $database->getReference($ref_table)->push($postData);

if($postRef){
    $_SESSION['status']="DATA INSERTED SUCCESSFULLY";
    header("Location: add.php");
}else{
    $_SESSION['status']="DATA INSERT FAILED";
    header("Location: add.php");
}
}

if(isset($_POST['new_user'])){
    $fname=$_POST['full_name'];
    $psd=$_POST['psd'];
    $email=$_POST['email'];
    $contact=$_POST['phno'];
    $userProperties = [
        'email' => $email,
        'emailVerified' => false,
        'phoneNumber' => $contact,
        'password' => $psd,
        'displayName' => $fname
    ];
    
    $createdUser = $auth->createUser($userProperties);
    if($createdUser){
        $auth->sendEmailVerificationLink($email);
        $_SESSION['status']="USER CREATED SUCCESSFULLY";
        header("Location: index.php");
    }else{
        $_SESSION['status']="USER CREATED FAILED";
        header("Location: index.php");
    }
}

if(isset($_POST['edit_user'])){
    $name=$_POST['full_name'];
    $phno=$_POST['phno'];
    $uid=$_POST['id'];
    $properties = [
        'displayName' => $name,
        'phoneNumber' => $phno
    ];
    
    $updatedUser = $auth->updateUser($uid, $properties);
    $type=$_POST['acc_type'];
    if($type=="1"){
        $auth->enableUser($uid);
    }else{
        $auth->disableUser($uid);
    }
    if($updatedUser){
        $_SESSION['status']="USER UPDATED SUCCESSFULLY";
        header("Location: users.php");
    }else{
        $_SESSION['status']="USER UPDATE FAILED";
        header("Location: users.php");
    }
}
?>