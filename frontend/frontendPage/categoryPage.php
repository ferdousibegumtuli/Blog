<?php
    include('../layout/header.php');
    include('../layout/navber.php');
    require($rootPath . '/controller/tagController.php');
        $tagController = new TagController();
        $tags = $tagController->index();
    require_once($rootPath . '/controller/articleController.php');
        if(isset($_GET['category_id'])){
            $categoriesId = $_GET['category_id'];
            $articleController = new ArticleController();
            $articleLimitId = $articleController->getLimitedId();
            $articleGetByCategoryId = $articleController->getByCategoryId($categoriesId);
            // echo "<pre>";
            // print_r($articleGetByCategoryId);
        }
    require_once($rootPath . '/controller/userController.php');
    $userController = new UserController();
?>
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box fadeInLeft animated-fast" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">article</div>
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
                        <a href="single.html" class="fh5co_magna py-2"><?php echo $article['title']?></a> <a href="#" class="fh5co_mini_time py-3">
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
                    <a href="#" class="fh5co_tagg"><?php echo $tag['tag'] ?></a>
                </div>
                <?php } ?>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                </div>
                <div class="row pb-3">
                <?php foreach ($articleLimitId as $articleKey => $article) { ?>
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
                <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                <a href="#" class="btn_pagging">1</a>
                <a href="#" class="btn_pagging">2</a>
                <a href="#" class="btn_pagging">3</a>
                <a href="#" class="btn_pagging">...</a>
                <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
             </div>
        </div>
    </div>
</div>
<?php
    include('../layout/footer.php');
?>