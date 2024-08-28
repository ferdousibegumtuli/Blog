<?php
    include('../layout/header.php');
    include('../layout/navber.php');
    require($rootPath . '/controller/tagController.php');
        $tagController = new TagController();
        $tags = $tagController->index();
    require_once($rootPath . '/controller/articleController.php');
        if(isset($_GET['category_id'])){
            $categoriesId = $_GET['category_id'];
            $offset = $_GET['offset'] ?? 1;
            $articleController = new ArticleController();
            $articleLimit = $articleController->getLimitArticle($categoriesId);
            $articleGetByCategoryId = $articleController->getByCategoryIdAndOffset($categoriesId, $offset);   
            $totalArticle = $articleController->countArticleByCategoryId($categoriesId);
            $countPage = $totalArticle[0][0]/ 4;
            $numberOfPage = (ceil($countPage));
        }
    require_once($rootPath . '/controller/userController.php');
    $userController = new UserController();
    
?>
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box fadeInLeft animated-fast" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Article</div>
                </div>
                <?php foreach ($articleGetByCategoryId as $articleKey => $article) { ?>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="<?php echo $baseUrl . $article['image'] ?>" alt=""></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box fadeInUp animated-fast">
                        <a href="<?php echo $baseUrl ?>/frontend/frontendPage/singlePage.php?article_id=<?php echo $article['id']?>" class="fh5co_magna py-2"><?php echo $article['title']?></a> <a href="#" class="fh5co_mini_time py-3">
                        <?php  $user = $userController->getUserName($article['user_id']);
                            echo $user[0]['full_name']?> - <?php echo $article['published_at']?> </a>
                        <div class="fh5co_consectetur"><?php echo substr($article['description'], 0, 250,).'. . . . .';?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

            <div class="col-md-3 animate-box fadeInRight animated-fast" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <?php foreach ($tags as $tagKey => $tag) { ?>
                <div class="fh5co_tags_all">
                    <a href="<?php echo $baseUrl ?>/frontend/frontendPage/tagPage.php?tag_id=<?php echo $tag['id']?>" class="fh5co_tagg"><?php echo $tag['tag']?></a>
                </div>
                <?php } ?>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                </div>
                <div class="row pb-3">
                <?php foreach ($articleLimit as $articleKey => $article) { ?>
                    <div class="col-5 align-self-center">
                        <img src="<?php echo $baseUrl . $article['image'] ?>" alt="img" class="fh5co_most_trading">
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> <?php echo $article['title'] ?></div>
                        <div class="most_fh5co_treding_font_123"> <?php echo $article['published_at'] ?></div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-12 text-center pb-4 pt-4">
                <?php for ($x = 1; $x <= $numberOfPage; $x++) { ?>    
                <a href="categoryPage.php?category_id=<?php echo $_GET['category_id']?>&offset=<?php echo $x ?>" class="btn_pagging"><?php echo $x ?></a>   
                <?php } ?>
             </div>
        </div>
    </div>
</div>
<?php
    include('../layout/footer.php');
?>