<!-- Caption Line -->
<h2 class="grid_12 caption clearfix">Our <span>blog</span>, keeping you up-to-date on our latest news.</h2>
<div class="hr grid_12 clearfix">&nbsp;</div>

<!-- Column 1 /Content -->
<div class="grid_8">

    <!-- Blog Post -->
    <?foreach($posts as $post):?>
        <div class="post">
            <!-- Post Title -->
            <h3 class="title"><a href="<?= \yii\helpers\Url::to(['blog/view', 'id' => $post['id']])?>"><?=$post['name']?></a></h3>
            <!-- Post Data -->
            <p class="sub"><?=$post['date']?> &bull; <a href="javascript:void(0)"><?=$comment?> Comment</a></p>
            <div class="hr dotted clearfix">&nbsp;</div>
            <!-- Post Image -->
            <img class="thumb" alt="" src="/images/<?=$post['images']?>" />
            <!-- Post Content -->
            <?\app\controllers\truncateBlogText($post['text'])?>
            <!-- Read More Button -->
            <p class="clearfix"><a href="<?= \yii\helpers\Url::to(['blog/view', 'id' => $post['id']])?>" class="button right"> Read More...</a></p>
        </div>
        <div class="hr clearfix">&nbsp;</div>
    <?endforeach;?>

    <!-- Blog Navigation -->
    <p class="clearfix">
        <?php
        echo \yii\widgets\LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>
    </p>
</div>

<!-- Column 2 / Sidebar -->
<div class="grid_4">
    <h4>Catagories</h4>
    <ul class="sidebar">
        <?foreach($cat as $ct):?>
            <li><a href="<?= \yii\helpers\Url::to(['blog/index', 'cat_id' => $ct['id']])?>"><?=$ct['name']?></a></li>
        <?endforeach;?>
    </ul>
    <h4>Latest Posts</h4>
    <ul class="sidebar">
        <?foreach($last_posts as $last):?>
            <li><a href="<?= \yii\helpers\Url::to(['blog/view', 'id' => $last['id']])?>"><?=$last['name']?></a></li>
        <?endforeach;?>
    </ul>
</div>