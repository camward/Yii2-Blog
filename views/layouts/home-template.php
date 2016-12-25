<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use app\assets\ltAppAsset;
use yii\bootstrap\Nav;

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
    <?php
    echo Nav::widget([
        'options' => ['class' => 'grid_8', 'id' => 'navigation'],
        'items' => [
            ['label' => '<span class="meta">Get in touch</span><br />Contact Us', 'url' => ['/my/contact']],
            ['label' => '<span class="meta">Latest news</span><br />Blog', 'url' => ['/blog/index']],
            ['label' => '<span class="meta">Our latest work</span><br />Portfolio', 'url' => ['/portfolio/index']],
            ['label' => '<span class="meta">Who are we?</span><br />About', 'url' => ['/my/about']],
            ['label' => '<span class="meta">Homepage</span><br />Home', 'url' => ['/my/index']],
        ],
        'encodeLabels' => false
    ]);
    ?>

    <div class="hr grid_12">&nbsp;</div>
    <div class="clear"></div>

    <?=$content;?>

    <div class="hr grid_12 clearfix">&nbsp;</div>
    <!-- Footer -->
    <p class="grid_12 footer clearfix">
        <span class="float"><b>Alex St</b> &copy; 2016</span>
        <a class="float right" href="#">top</a>
    </p>

</div><!--end wrapper-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
