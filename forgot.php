<?php
include('dbcon.php');
include('includes/header.php');
?>
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
                            <label for="exampleInputPassword3">Email</label>
                            <input type="email" class="form-control" id="exampleInputPassword3"  name="new_email" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="email_btn" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_POST['email_btn'])){

    $email=$_POST['new_email'];
    $updatedUser = $auth->sendPasswordResetLink($email);
    if($updatedUser){
        $_SESSION['status']="Password reset mail sent";
        header("Location: login.php");
    }else{
        $_SESSION['status']="Email not sent";
        header("Location: login.php");
    }
}