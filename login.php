<?php
session_start();
if(isset($_SESSION['verified_user'])){
    $_SESSION['status']='You are already Logged In';
    header('location: home.php');
    exit();
}
include('includes/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
        <?php if(isset($_SESSION['status'])){
                            echo "<h4>".$_SESSION['status']."</h4>";
                            unset($_SESSION['status']);
                        }
                        ?>
            <div class="card mt-4">

                <div class="card-header">
                    <h4>Login <Form></Form></h4>
                </div>
                <div class="card-body">
                    <form action="logincode.php" method="post">
                    <div class="form-group mb-3">
                        <label>User Email</label>
                        <input type="email" class="form-control" name="email" placeholder="sample@gmail.com">
                    </div>
                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
                        <a href="signup.php" class="btn btn-info">Signup</a>
                        <a href="forgot.php" class="btn btn-link">Forgot Password?</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>