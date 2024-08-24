<?php 
include('frontend/layout/header.php');
include('frontend/layout/navber.php');
require($rootPath . '/controller/tagController.php');
require_once($rootPath . '/controller/articleController.php');
    $articleController = new ArticleController();
    $articleId = $articleController->getLimitId();
    $articleLimitId = $articleController->getLimitedId();
    $tagController = new TagController();
    $tags = $tagController->index();
    require_once($rootPath . '/controller/userController.php');
    $userController = new UserController();
?>
<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
        <?php if (!empty($articleId[0])){ ?>
        <div class="col-md-6 col-12 paddding animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
            <div class="fh5co_suceefh5co_height"><img src="<?php echo $baseUrl . $articleId[0]['image'] ?>" alt="img">
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class=""><a href="#" class="color_fff"> <?php echo $articleId[0]['published_at'] ?>
                    </a></div>
                    <div class=""><a href="<?php echo $baseUrl ?>/frontend/frontendPage/singlePage.php?article_id=<?php echo $articleId[0]['id']?>" class="fh5co_good_font"> <?php echo $articleId[0]['title'] ?> </a></div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="col-md-6">
            <div class="row">
                <?php if (!empty($articleId[0])){ ?>
                <div class="col-md-6 col-6 paddding animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="<?php echo $baseUrl . $articleId[0]['image'] ?>" alt="img">
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"><?php echo $articleId[0]['published_at'] ?>
                            </a></div>
                            <div class=""><a href="<?php echo $baseUrl ?>/frontend/frontendPage/singlePage.php?article_id=<?php echo $articleId[0]['id']?>" class="fh5co_good_font_2"><?php echo $articleId[0]['title'] ?></a></div>
                        </div>
                    </div>
                </div>
                <?php } 
                if (!empty($articleId[1])) { ?>
                <div class="col-md-6 col-6 paddding animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="<?php echo $baseUrl . $articleId[1]['image'] ?>" alt="img">
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"><?php echo $articleId[1]['published_at'] ?></a></div>
                            <div class=""><a href="<?php echo $baseUrl ?>/frontend/frontendPage/singlePage.php?article_id=<?php echo $articleId[1]['id']?>" class="fh5co_good_font_2"> <?php echo $articleId[1]['title'] ?></a></div>
                        </div>
                    </div>
                </div>
                <?php } 
                if (!empty($articleId[2])){ ?>
                <div class="col-md-6 col-6 paddding animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="<?php echo $baseUrl . $articleId[2]['image'] ?>" alt="img">
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"> <?php echo $articleId[2]['published_at'] ?>
                            </a></div>
                            <div class=""><a href="<?php echo $baseUrl ?>/frontend/frontendPage/singlePage.php?article_id=<?php echo $articleId[2]['id']?>" class="fh5co_good_font_2"> <?php echo $articleId[2]['title'] ?> </a></div>
                        </div>
                    </div>
                </div>
                <?php }
                if (!empty($articleId[3])){ ?>
                <div class="col-md-6 col-6 paddding animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="<?php echo $baseUrl . $articleId[3]['image'] ?>" alt="img">
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"><?php echo $articleId[3]['published_at'] ?>
                            </a></div>
                            <div class=""><a href="<?php echo $baseUrl ?>/frontend/frontendPage/singlePage.php?article_id=<?php echo $articleId[3]['id']?>"  class="fh5co_good_font_2"> <?php echo $articleId[3]['title'] ?> </a></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Articles</div>
                </div>
                <div class="row pb-4">
                <?php foreach ($articleId as $articleKey => $article) { ?>
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="<?php echo $baseUrl . $article['image'] ?>" alt=""></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="<?php echo $baseUrl ?>/frontend/frontendPage/singlePage.php?article_id=<?php echo $article['id']?>" class="fh5co_magna py-2"><?php echo $article['title'] ?></a>
                        <a href="<?php echo $baseUrl ?>/frontend/frontendPage/singlePage.php?article_id=<?php echo $article['id']?>" class="fh5co_mini_time py-3">
                            <?php  $user = $userController->getUserName($article['user_id']);
                               echo $user[0]['full_name']?> -
                            <?php echo $article['published_at'] ?> </a>
                        <div class="fh5co_consectetur"><?php echo substr($article['description'], 0, 250). ". . . . . ."; ?>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <?php foreach ($tags as $tagKey => $tag) { ?>
                <div class="fh5co_tags_all">
                    <a href="<?php echo $baseUrl ?>/frontend/frontendPage/tagPage.php?tag_id=<?php echo $tag['id']?>" class="fh5co_tagg"><?php echo $tag['tag'] ?></a>
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
                        <div class="most_fh5co_treding_font"><?php echo $article['title'] ?></div>
                        <div class="most_fh5co_treding_font_123"><?php echo $article['published_at'] ?></div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
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
<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5"><img src="frontendAssets/images/white_logo.png" alt="img" class="footer_logo"></div>
            <div class="clearfix"></div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="footer_main_title py-3"> About</div>
                <div class="footer_sub_about pb-3"> Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
                <div class="footer_mediya_icon">
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                    </a></div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="footer_main_title py-3"> Category</div>
                <ul class="footer_menu">
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Business</a></li>
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Entertainment</a></li>
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Environment</a></li>
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Health</a></li>
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Life style</a></li>
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Politics</a></li>
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Technology</a></li>
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; World</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                <div class="footer_main_title py-3"> Most Viewed Posts</div>
                <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                <div class="footer_position_absolute"><img src="frontendAssets/images/footer_sub_tipik.png" alt="img" class="width_footer_sub_img"></div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="footer_main_title py-3"> Last Modified Posts</div>
                <a href="#" class="footer_img_post_6"><img src="frontendAssets/images/allef-vinicius-108153.jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="frontendAssets/images/32-450x260.jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="frontendAssets/images/download (1).jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="frontendAssets/images/science-578x362.jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="frontendAssets/images/vil-son-35490.jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="frontendAssets/images/zack-minor-15104.jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="frontendAssets/images/download.jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="frontendAssets/images/download (2).jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="frontendAssets/images/ryan-moreno-98837.jpg" alt="img"></a>
            </div>
        </div>
    </div>
</div>
<?php 
    include('frontend/layout/footer.php');
?>
