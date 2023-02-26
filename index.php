<?php
include('authenticate.php');
include('includes/header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card my-3">
                    <div class="card-body">
                        <h5>
                            Total Records:
                        <?php
                        include('dbcon.php');
                        $ref_table="name";
                        $total_rows=$database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo $total_rows;
                        ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-9 my-3 text-end">
                <a href="login.php" class="btn btn-success">Login</a>
                <a href="signup.php" class="btn btn-primary">Signup</a>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
            <div class="col-md-12">
            <?php if(isset($_SESSION['status'])){
                            echo "<h4>".$_SESSION['status']."</h4>";
                            unset($_SESSION['status']);
                        }
                        ?>
                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Firebase With PHP
                            <a href="add.php" class="btn btn-primary float-end">ADD</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('dbcon.php');
                                $ref_table="name";
                                $fetch = $database->getReference($ref_table)->getValue();
                                if($fetch>0){
                                    $i=0;
                                    foreach($fetch as $key=>$row){
                                        $i++;
                                        ?>
                                        <tr>
                                            <td><?= $i;?></td>
                                            <td><?php echo $row['first_name'];?></td>
                                            <td><?php echo $row['last_name'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['phno'];?></td>
                                            <td>
                                                <a href="edit.php?id=<?=$key;?>" class="btn btn-success">Edit</a>
                                            </td>
                                            <td>
                                                <form action="code.php" method="post">
                                                    <input type="hidden" name="id" value="<?=$key?>" />
                                                    <button type="submit" class="btn btn-danger" name="dlt_data">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }else{
                                ?>
                                <tr>
                                    <td colspan="6">No Records Found</td>
                                </tr>
                                <?php
                                }
                                ?>
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>