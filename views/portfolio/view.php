<h2 class="grid_12 caption clearfix">Our <span>portfolio</span>, home to our latest, and greatest work.</h2>
<div class="hr grid_12 clearfix">&nbsp;</div>

<!-- Column 1 / Project Information -->
<div class="grid_4">
    <a class="meta" href="javascript:void(0)"><?=$project[0]['url']?></a>
    <h4 class="title" style="margin-top: 0!important;"><?=$project[0]['name']?></h4>
    <div class="hr dotted clearfix">&nbsp;</div>
    <?=$project[0]['text']?>
    <p class="clearfix">
        <?=\yii\helpers\Html::a('&lt;&lt; Back to Portfolio', ['portfolio/index'], ['class' => 'button float'])?>
        <a href="javascript:void(0)" class="button float right">Visit Site</a>
    </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
    <ul id="folio_scroller">
        <?foreach($project[0]['images'] as $img):?>
            <li><span><?=$img['description']?></span><a href="#"><img src="/images/<?=$img['images']?>"/></a></li>
        <?endforeach;?>
    </ul>
</div>

<div class="hr grid_12 clearfix">&nbsp;</div>

<!-- Client pickup line -->
<h2 class="grid_12 caption">Like this project? We can do something similar for you.
    <?=\yii\helpers\Html::a('<span>Get in touch...</span>', ['my/contact'])?></h2>
