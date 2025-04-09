<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="<?php echo $baseUrl ?>/frontendAssets/images/logo.png" alt="img" class="mobile_logo_width"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $baseUrl ?>/index.php">Home <span class="sr-only">(current)</span></a>
                    </li>


                    <?php
                    foreach ($categories as $categoryKey => $category) { ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo $baseUrl ?>/frontend/frontendPage/categoryPage.php?category_id=<?php echo $category['id']?>">
                            <?php echo $category['category'] ?><span class="sr-only">(current)</span></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>
</div>