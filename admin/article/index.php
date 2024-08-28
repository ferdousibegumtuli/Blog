<?php
include('../layout/header.php');
if($_SESSION['user'])
{
    include('../layout/sidebar.php');
    require_once($rootPath . '/controller/articleController.php');
    require_once($rootPath . '/controller/categoryController.php');
    require_once($rootPath . '/controller/tagController.php');
    require_once($rootPath . '/controller/userController.php');
    $userController = new UserController();
    $tagController = new TagController();
    $categoryController = new CategoryController();
    $articleController = new ArticleController();
    $articles = $articleController->index();
?>
<div id="main">
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
                    <th>TITLE</th>
                    <th>WRITER NAME</th>
                    <th>CATEGORY</th>
                    <th>TAG</th>
                    <th>PUBLISHED</th>
                    <th>STATUS</th>
                    <th>ACTION</th>

                </tr>
            </thead>
            <body>
            <?php foreach ($articles as $articleKey => $article) { ?>
                <tr>
                    <td><?php echo $articleKey + 1 ?> </td>
                    <td><?php echo $article['title'] ?> </td>
                    <td>
                        <?php $user = $userController->getUserName($article['user_id']);
                        echo ($user[0]['full_name']); ?>
                    </td>
                    <td><?php $category = $categoryController->getCategoryName($article['category_id']);
                         echo ($category[0]['category']); ?>
                    </td>
                    <td><?php $tag = $tagController->getTagName($article['tag_id']);
                         echo ($tag[0]['tag']); ?>
                    </td>
                    <td><?php echo $article['published_at'] ?> </td>
                    <td>
                        <?php echo $articleController->getStatus($article['status']) ?> </td>
                    <td>
                    <a href="edit.php?id=<?php echo $article['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="delete.php?id=<?php echo $article['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </body>
        </table>
    </div>
<?php
    include('../layout/footer.php');
}
else
{
    header("location:../login/index.php");
}
?>
