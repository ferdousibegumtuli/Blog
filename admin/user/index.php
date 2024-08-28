<?php
    include('../layout/header.php');
    if($_SESSION['user'])
    {
    include('../layout/sidebar.php');
    require($rootPath . '/controller/userController.php');
    $getAllFromDb = new UserController();
    $users = $getAllFromDb->index();
    // echo "<pre>";
    // print_r($users);
    // die();
?>
<div id="main">
    <div class="col-md-6">
        <?php 
        if(isset($_SESSION['addData']))
        {
        ?>  
        <div class="alert alert-success"> 
            <div style = "text-align:left; color:<?php echo $_SESSION['addData']['type'] == 'success'?>">
            </div>     
            <?php
            echo $_SESSION ['addData']['msg'];
            unset($_SESSION['addData']);
            ?>
        </div>
        <?php
        }
        ?>
        <?php 
        if(isset($_SESSION['editData']))
        {
        ?>  
        <div class="alert alert-success"> 
            <div style = "text-align:left; color:<?php echo $_SESSION['editData']['type'] == 'success'?>">
            </div>     
            <?php
            echo $_SESSION ['editData']['msg'];
            unset($_SESSION['editData']);
            ?>
        </div>
        <?php
        }
        ?>
        <?php 
        if(isset($_SESSION['deleteData']))
        {
        ?>  
        <div class="alert alert-success"> 
            <div style = "text-align:left; color:<?php echo $_SESSION['deleteData']['type'] == 'success'?>">
            </div>     
            <?php
            echo $_SESSION ['deleteData']['msg'];
            unset($_SESSION['deleteData']);
            ?>
        </div>
        <?php
        }
        ?>
            <div style="text-align:right;">
                <a href="add.php" class="btn btn-primary">Add</a>
            </div>
            <table class="table table-light mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>USER NAME</th>
                        <th>USER FULL NAME</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <body>
                <?php foreach ($users as $userKey => $user) { ?>
                    <tr>
                        <td><?php echo $userKey + 1 ?> </td>
                        <td><?php echo $user['user_name'] ?> </td>
                        <td><?php echo $user['full_name'] ?> </td>
                        <td><?php echo $user['status'] ?> </td>
                        <td>
                        <a href="edit.php?id=<?php echo $user['id']?>" class="btn btn-success">Edit</a>
                        <a href="delete.php?id=<?php echo $user['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </body>
            </table>
    </div>
</div>
<?php
    include('../layout/footer.php');
}
else
{
       header("location:../login/index.php");
}
?>