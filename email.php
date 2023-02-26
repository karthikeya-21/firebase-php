<?php
include('dbcon.php');
include('authenticate.php');
include('includes/header.php');
include('includes/nav.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-12-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h4>Change Email - Firebase</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleInputPassword3">New Email</label>
                            <input type="email" class="form-control" id="exampleInputPassword3"  name="new_email" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="email_btn" class="btn btn-primary">Change Email</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_POST['email_btn'])){
    $id=$_GET['id'];
    $user= $auth->getUser($id);

    $email=$_POST['new_email'];
    $updatedUser = $auth->changeUserEmail($id,$email);
    if($updatedUser){
        $_SESSION['status']="Email Changed SUCCESSFULLY";
        header("Location: users.php");
    }else{
        $_SESSION['status']="Email not changed";
        header("Location: users.php");
    }
}