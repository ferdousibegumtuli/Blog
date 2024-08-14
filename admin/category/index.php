<?php
include('../layout/header.php');
if($_SESSION['user'])
{
    include('../layout/sidebar.php');
    require($rootPath . '/controller/categoryController.php');
    $getAllFromDb = new CategoryController();
    $categories = $getAllFromDb->index();
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
                        <th>CATEGORY</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <body>
                <?php foreach ($categories as $categoryKey => $category) { ?>
                    <tr>
                        <td><?php echo $categoryKey + 1 ?> </td>
                        <td><?php echo $category['category'] ?> </td>
                        <td>
                        <a href="edit.php?id=<?php echo $category['id']?>" class="btn btn-success">Edit</a>
                        <a href="delete.php?id=<?php echo $category['id'] ?>" class="btn btn-danger">Delete</a>
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
    
