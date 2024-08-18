<?php
include('layout/header.php');
if($_SESSION['user'])
{
include('layout/sidebar.php');
require_once($rootPath . '/controller/categoryController.php');
    $getAllFromDb = new CategoryController();
    $categories = $getAllFromDb->index();
require_once($rootPath . '/controller/tagController.php');
    $getAllFromDb = new TagController();
    $tags = $getAllFromDb->index();
require_once($rootPath . '/controller/articleController.php');
    $articleController = new ArticleController();
    $publishedStatus = $articleController->getStatusByPublishedId();
    $draftStatus = $articleController->getStatusByDraftId();
    $articleId = $articleController->getLimitId();
require_once($rootPath . '/controller/userController.php');
    $getAllFromDb = new UserController();
    $users = $getAllFromDb->index();
require_once($rootPath . '/controller/userController.php');
    $userController = new UserController();
       
?>
<div id="main">
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <h3>Profile Statistics</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Category</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo count($categories);?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Tag</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo count($tags);?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Draft Blog</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo $draftStatus[0][0];?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Published Blog</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo  $publishedStatus[0][0];?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="name ms-4">
                                <h5 class="font-bold"></h5>
                                <h6 class="text-muted mb-0">WELCOME<br><br>
                                    <?php echo ($_SESSION['user'][0][0]['full_name']);?>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h4>Recent Article</h4>
                </div>
                <div class="card-content pb-4">
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="name ms-4">
                            <h5 class="mb-1"><?php echo $articleId[0]['title'] ?></h5>
                            <h6 class="text-muted mb-0">
                                <?php $user = $userController->getUserName($articleId[0]['user_id']);
                                echo ($user[0]['full_name']); ?>
                            </h6>
                        </div>
                    </div>
                    <div class="recent-message d-flex px-4 py-3">    
                        <div class="name ms-4">
                            <h5 class="mb-1"><?php echo $articleId[1]['title'] ?></h5>
                            <h6 class="text-muted mb-0">
                            <?php $user = $userController->getUserName($articleId[1]['user_id']);
                                echo ($user[0]['full_name']); ?>
                            </h6>
                        </div>
                    </div>
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="name ms-4">
                            <h5 class="mb-1"><?php echo $articleId[2]['title'] ?></h5>
                            <h6 class="text-muted mb-0">
                            <?php $user = $userController->getUserName($articleId[2]['user_id']);
                                echo ($user[0]['full_name']); ?>
                            </h6>
                        </div>
                    </div>
                    <div class="recent-message d-flex px-4 py-3">    
                        <div class="name ms-4">
                            <h5 class="mb-1"><?php echo $articleId[3]['title'] ?></h5>
                            <h6 class="text-muted mb-0">
                            <?php $user = $userController->getUserName($articleId[3]['user_id']);
                                echo ($user[0]['full_name']); ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 &copy; Mazer</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                    href="http://ahmadsaugi.com">A. Saugi</a></p>
        </div>
    </div>
</footer>
</div>
<?php
include('layout/footer.php');
}
else
{
    header("location:../login/index.php");
}
?>