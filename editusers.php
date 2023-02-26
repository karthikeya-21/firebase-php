<?php
include('authenticate.php');
include('includes/header.php');
include('includes/nav.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h4>Registered Users - Firebase</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="post">
                        <?php if(isset($_GET['id'])){
                            $userid=$_GET['id'];
                            $user = $auth->getUser($userid);
                        ?>
                        <div class="row">
                            <div class="col-md-6">
                            <input type="hidden" name="id" value="<?=$_GET['id']?>" />
                            <div class="form-group mb-3">
                                        <label for="">Full Name</label>
                                        <input type="text" class="form-control" name="full_name" value="<?=$user->displayName?>"/>
                            </div>
                            <div class="form-group mb-3">
                                        <label for="">Phone Number</label>
                                        <input type="text" class="form-control" name="phno" value="<?=$user->phoneNumber?>"/>
                            </div>
                            <div class="form-group mb-3">
                                        <label for="">Activity</label>
                                        <select name="acc_type">
                                            <option default>SELECT ONE</option>
                                            <option value="1">Enabled</option>
                                            <option value="2">Disabled</option>
                                        </select>
                            </div>
                            <div class="form-group mb-3">
                            <a href="demo.php?id=<?=$userid?>" class="btn btn-dark">Change Password</a>
                            <a href="email.php?id=<?=$userid?>" class="btn btn-warning">Change Email</a>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="edit_user" class="btn btn-primary">Update User</button>
                                <a href="users.php" class="btn btn-info">Back</a>
                            </div>
                            </div>
                        </div>
                        <?php } ?>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>