<?php
session_start();
include('includes/header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="card-title">ADD to Firebase
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php if(isset($_SESSION['status'])){
                            echo "<h4>".$_SESSION['status']."</h4>";
                            unset($_SESSION['status']);
                        }
                        ?>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <form action="code.php" method="post">
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" name="first_name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" name="last_name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Contact</label>
                                        <input type="text" class="form-control" name="phone"/>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="save_data" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>