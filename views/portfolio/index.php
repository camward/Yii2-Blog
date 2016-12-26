<?
$this->title = 'Портфолио';
$this->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
$this->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);
?>

<h2 class="grid_12 caption clearfix">Our <span>portfolio</span>, home to our latest, and greatest work.</h2>
<?foreach($portfolio as $port):?>
    <div class="pr clearfix grid_12">&nbsp;</div>
    <div class="catagory_1 clearfix">
        <!-- Row 1 -->
        <div class="grid_3 textright" >
            <span class="meta"><?=$port['description']?></span>
            <h4 class="title" style="margin-top: 0!important;"><?=$port['name']?></h4>
            <div class="hr clearfix dotted">&nbsp;</div>
            <p><?=$port['text']?></p>
        </div>
        <div class="grid_9">
            <?foreach($port['projects'] as $project):?>
                <a class="portfolio_item float alpha" href="<?= \yii\helpers\Url::to(['portfolio/view', 'id' => $project['id']]) ?>">
                    <span><?=$project['name']?></span>
                    <img src="/images/<?=$project['min_img']?>" />
                </a>
            <?endforeach;?>
            <div class="clear"></div>
        </div>
    </div>
<?endforeach;?>