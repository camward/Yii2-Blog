<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use app\assets\ltAppAsset;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="wrapper" class="container_12 clearfix">

    <!-- Text Logo -->
    <h1 id="logo" class="grid_4">Aurelius</h1>

    <!-- Navigation Menu -->
    <ul id="navigation" class="grid_8">
        <li><a href="contact.html"><span class="meta">Get in touch</span><br />Contact Us</a></li>
        <li><a href="blog.html"><span class="meta">Latest news</span><br />Blog</a></li>
        <li><a href="portfolio.html"><span class="meta">Our latest work</span><br />Portfolio</a></li>

        <li><a href="about.html"><span class="meta">Who are we?</span><br />About</a></li>
        <li><a href="index.html" class="current"><span class="meta">Homepage</span><br />Home</a></li>
    </ul>

    <div class="hr grid_12">&nbsp;</div>
    <div class="clear"></div>

    <!-- Featured Image Slider -->
    <div id="featured" class="clearfix grid_12">
        <ul>
            <li>
                <a href="portfolio_single.html">
                    <span>Read about this project</span>
                    <img src="images/600x300.gif" alt="" />
                </a>
            </li>
            <li>
                <a href="portfolio_single.html">
                    <span>Read about this project</span>
                    <img src="images/600x300.gif" alt="" />
                </a>
            </li>
            <li>
                <a href="portfolio_single.html">
                    <span>Read about this project</span>
                    <img src="images/600x300.gif" alt="" />
                </a>
            </li>
            <li>
                <a href="portfolio_single.html">
                    <span>Read about this project</span>
                    <img src="images/600x300.gif" alt="" />
                </a>
            </li>
            <li>
                <a href="portfolio_single.html">
                    <span>Read about this project</span>
                    <img src="images/600x300.gif" alt="" />
                </a>
            </li>
        </ul>
    </div>
    <div class="hr grid_12 clearfix">&nbsp;</div>

    <!-- Caption Line -->
    <h2 class="grid_12 caption clearfix">Welcome! This is <span>Aurelius</span>, a slick, professional <u>Business</u> &amp; <u>Portfolio</u> theme built to engage the user in your work.</h2>

    <div class="hr grid_12 clearfix quicknavhr">&nbsp;</div>
    <div id="quicknav" class="grid_12">
        <a class="quicknavgrid_3 quicknav alpha" href="portfolio.html">
            <h4 class="title ">Recent Work</h4>
            <p>Cras vestibulum lorem et dui mollis sed posuere leo semper. </p>
            <p style="text-align:center;"><img alt="" src="images/Art_Artdesigner.lv.png" /></p>

        </a>
        <a class="quicknavgrid_3 quicknav" href="about.html">
            <h4 class="title ">Learn about us</h4>
            <p>Cras vestibulum lorem et dui mollis sed posuere leo semper. </p>
            <p style="text-align:center;"><img alt="" src="images/info.png" /></p>

        </a>
        <a class="quicknavgrid_3 quicknav" href="blog.html">
            <h4 class="title ">Read our blog</h4>
            <p>Cras vestibulum lorem et dui mollis sed posuere leo semper. </p>
            <p style="text-align:center;"><img alt="" src="images/Blog_Artdesigner.lv.png" /></p>

        </a>
        <a class="quicknavgrid_3 quicknav" href="#">
            <h4 class="title ">Follow on Twitter</h4>
            <p>Cras vestibulum lorem et dui mollis sed posuere leo semper. </p>
            <p style="text-align:center;"><img alt="" src="images/hungry_bird.png" /></p>
        </a>
    </div>
    <div class="hr grid_12 clearfix">&nbsp;</div>
    <!-- Footer -->
    <p class="grid_12 footer clearfix">
        <span class="float"><b>&copy; Copyright</b> <a href="">QwibbleDesigns</a> - remove upon purchase.</span>
        <a class="float right" href="#">top</a>
    </p>

</div><!--end wrapper-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
