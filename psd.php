<?php
include('authenticate.php');
include('includes/header.php');
include('includes/nav.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-12-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h4>Change Password - Firebase</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Old Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Old Password" name="old_password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">New Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="New Password" name="new_password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword3">Confirm New Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirm New Password" name="new_password_confirmation" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>