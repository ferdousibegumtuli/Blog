<?php 
    include('../layout/header.php');
    include('../layout/navber.php');
    require_once($rootPath . '/controller/articleController.php');
    if(isset($_GET['article_id'])){
        $articleId = $_GET['article_id'];
        $articleController = new ArticleController();
        $articleGetByArticleId = $articleController->getByArticleId($articleId);
        $articleLimitId = $articleController->getLimitedId();
    }
    require($rootPath . '/controller/tagController.php');
    $tagController = new TagController();
    $tags = $tagController->index();
 ?>
<body class="single">
<div id="fh5co-title-box" style="background-image: url(<?php echo $baseUrl . $articleGetByArticleId[0]['image'] ?>); background-position: -1px -164.922px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="page-title">
        <span><?php echo $articleGetByArticleId[0]['published_at']?></span>
        <h2><?php echo $articleGetByArticleId[0]['title']?></h2>
    </div>
</div>
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box fadeInLeft animated-fast" data-animate-effect="fadeInLeft">
                <?php echo $articleGetByArticleId[0]['description']?>       
            </div>
            <div class="col-md-3 animate-box fadeInRight animated-fast" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <?php foreach ($tags as $tagKey => $tag) { ?>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <a href="<?php echo $baseUrl ?>/frontend/frontendPage/tagPage.php?tag_id=<?php echo $tag['id']?>" class="fh5co_tagg"><?php echo $tag['tag']?></a>
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
    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
        </div>
        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="slider2">
            
            
            
            
        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1494px;"><div class="owl-item active" style="width: 363.333px; margin-right: 10px;"><div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="images/39-324x235.jpg" alt=""></div>
                    <div>
                        <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div></div><div class="owl-item active" style="width: 363.333px; margin-right: 10px;"><div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="images/joe-gardner-75333.jpg" alt=""></div>
                    <div>
                        <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div></div><div class="owl-item active" style="width: 363.333px; margin-right: 10px;"><div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="images/ryan-moreno-98837.jpg" alt=""></div>
                    <div>
                        <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div></div><div class="owl-item active" style="width: 363.333px; margin-right: 10px;"><div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="images/seth-doyle-133175.jpg" alt=""></div>
                    <div>
                        <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div></div></div></div><div class="owl-nav"><div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>
    </div>
</div>
<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5"><img src="images/white_logo.png" alt="img" class="footer_logo"></div>
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
                <div class="footer_position_absolute"><img src="images/footer_sub_tipik.png" alt="img" class="width_footer_sub_img"></div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="footer_main_title py-3"> Last Modified Posts</div>
                <a href="#" class="footer_img_post_6"><img src="images/allef-vinicius-108153.jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="images/32-450x260.jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="images/download (1).jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="images/science-578x362.jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="images/vil-son-35490.jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="images/zack-minor-15104.jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="images/download.jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="images/download (2).jpg" alt="img"></a>
                <a href="#" class="footer_img_post_6"><img src="images/ryan-moreno-98837.jpg" alt="img"></a>
            </div>
        </div>
        <div class="row justify-content-center pt-2 pb-4">
            <div class="col-12 col-md-8 col-lg-7 ">
                <div class="input-group">
                    <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control fh5co_footer_text_box" placeholder="Enter your email..." aria-describedby="basic-addon1">
                    <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2018, All rights reserved. Design by <a href="https://freehtml5.co" title="Free HTML5 Bootstrap templates">FreeHTML5.co</a>. </div>
            <div class="col-12 col-md-6 spdp_right py-4">
                <a href="#" class="footer_last_part_menu">Home</a>
                <a href="Contact_us.html" class="footer_last_part_menu">About</a>
                <a href="Contact_us.html" class="footer_last_part_menu">Contact</a>
                <a href="blog.html" class="footer_last_part_menu">Latest News</a></div>
        </div>
    </div>
</div>

<?php
    include('../layout/footer.php');
?>