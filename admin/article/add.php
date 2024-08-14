<?php
include('../layout/header.php');
if($_SESSION['user'])
{
    include('../layout/sidebar.php');
?>
<?php
    require_once($rootPath . '/controller/categoryController.php');
    require_once($rootPath . '/controller/tagController.php');
    $categoryController = new CategoryController();
    $categories = $categoryController->index();
    $tagController = new TagController();
    $tags = $tagController->index();
    if(isset($_POST["submit"])){
        require_once ("../../controller/articleController.php");
        $subject = $_POST["titleName"];
        $category = $_POST["categoryId"];
        $tag = $_POST["tagId"];
        $article = $_POST["description"];
        $status = $_POST["status"];
        $articleController = new ArticleController();
        $articleIsSaved = $articleController->insert($subject,$article,$category,$tag,$status);
        if($articleIsSaved){
            $_SESSION['addData'] = [
                'msg' => 'Article Add Successfully',
                'type' => 'success'
            ];   
        }  
        header ("Location: index.php"); 
    } 
?>
<div id="main">
<form action = "add.php" method = "post">
    <h4 class="card-title">Article</h4>
        <div class="col-md-6">
            <div class="form-group row align-items-center">
                <div class="col-lg-2 col-3">
                    <label class="col-form-label">Subject</label>
                </div>
                <div class="col-lg-10 col-9">
                    <input type="text" id="first-name" class="form-control" name="titleName" placeholder="Enter Subject">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row align-items-center">
                <div class="col-lg-2 col-3">
                    <label class="col-form-label">Category</label>
                </div>
                <div class="col-lg-10 col-9">
                    <select  name = "categoryId" class="form-select" id="basicSelect">
                        <option value = ''>--select--</option>
                    <?php foreach ($categories as $categoryKey => $category) { ?>
                        <option value = <?php echo $category['id']?> ><?php echo $category['category'] ?></option>
                    <?php
                    }
                    ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row align-items-center">
                <div class="col-lg-2 col-3">
                    <label class="col-form-label">Tag</label>
                </div>
                <div class="col-lg-10 </div>col-9">
                    <select name = "tagId" class="form-select" id="basicSelect">
                        <option>--select--</option>
                    <?php foreach ($tags as $tagKey => $tag) { ?>
                            <option value = <?php echo $tag['id']?> ><?php echo $tag['tag'] ?></option>
                    <?php
                    }
                    ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row align-items-center">
                <div class="col-lg-2 col-3">
                    <label class="col-form-label">Article</label>
                </div>
                <div class="card">
                    <div class="card-header">
                        Article
                    </div>
                    <div class="card-body">
                        <div class="form-group with-title mb-3">
                            <textarea class="form-control" id="editor" rows="3" name = "description"></textarea>
                            <label>Write Your Blog</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row align-items-center">
                <div class="col-lg-2 col-3">
                    <label class="col-form-label">status</label>
                </div>
                <div class="col-lg-10 col-9">
                    <select  name = "status" class="form-select" id="basicSelect">
                        <option value = ''>--select--</option>
                        <option value = '0'>Draft</option>
                        <option value = '1'>Published</option>
                
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-12 d-flex justify-content-end">
                <input type="submit" class="btn btn-primary me-1 mb-1" name="submit" value="Submit"/>
            </div>
        </div>
    </form>
</div>
<?php
include('../layout/footer.php');
}
else
{
    header("location:../login/index.php");
}
?>
