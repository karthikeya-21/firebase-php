<?php
session_start();
include('includes/header.php'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-5">
                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="card-title">SIGNUP FORM
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php if(isset($_SESSION['status'])){
                            echo "<h4>".$_SESSION['status']."</h4>";
                            unset($_SESSION['status']);
                        }
                        ?>
                                <form action="code.php" method="post">
                                    <div class="form-group">
                                        <label for="">Full Name</label>
                                        <input type="text" class="form-control" name="full_name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone Number</label>
                                        <input type="text" class="form-control" name="phno"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" class="form-control" name="psd"/>
                                    </div><br>
                                    <div class="form-group">
                                        <button type="submit" name="new_user" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                    </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>