<?php
session_start();
include('includes/header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="card-title">EDIT in FIREBASE
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                            <?php
                                include('dbcon.php');
                                $ref_table="name";
                                $id=$_GET['id'];
                                $edit = $database->getReference($ref_table)->getChild($id)->getValue();
                                ?>
                                <form action="code.php" method="post">
                                    <input type="hidden" value="<?=$id?>" name="id">
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" name="first_name" value="<?=$edit['first_name'];?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" value="<?=$edit['last_name'];?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email" value="<?=$edit['email'];?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Contact</label>
                                        <input type="text" class="form-control" name="phone" value="<?=$edit['phno'];?>"/>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="update_data" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>