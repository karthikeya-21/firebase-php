<?php
include('authenticate.php');
include('includes/header.php');
include('includes/nav.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
            <?Php 
if(isset($_SESSION['status'])){
    echo "<h4 class='alert alert-success'>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
}
?>
                <div class="card-header">
                    <h4>Registered Users - Firebase</h4>
                    <div class="col-md-12 text-end">
                <a href="home.php" class="btn btn-danger">Back</a>
            </div>
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Enabled/Disabled</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('dbcon.php');
                    $users = $auth->listUsers();
                    $i=0;
                    foreach($users as $user){
                        ?>
                        <tr>
                            <td><?=++$i ?></td>
                            <td><?=$user->displayName?></td>
                            <td><?=$user->email?></td>
                            <td><?=$user->disabled!=1?"Enabled":"Disabled"?></td>
                            <td>
                                <a href="editusers.php?id=<?=$user->uid;?>" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="deleteusers.php" method="post">
                                    <input type="hidden" name="id" value="<?=$user->uid;?>" />
                                    <button type="submit" name="dlt_user" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include('includes/footer.php'); ?>