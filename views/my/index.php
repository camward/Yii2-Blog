<!-- Featured Image Slider -->
<div id="featured" class="clearfix grid_12">
    <ul>
        <?foreach($project as $pr):?>
            <li>
                <a href="<?= \yii\helpers\Url::to(['portfolio/view', 'id' => $pr->id])?>">
                    <span><?=$pr->name?></span>
                    <img src="images/<?=$pr->big_img?>" alt="" />
                </a>
            </li>
        <?endforeach;?>
    </ul>
</div>
<div class="hr grid_12 clearfix">&nbsp;</div>

<!-- Caption Line -->
<h2 class="grid_12 caption clearfix">Welcome! This is <span>Aurelius</span>, a slick, professional <u>Business</u> &amp; <u>Portfolio</u> theme built to engage the user in your work.</h2>

<div class="hr grid_12 clearfix quicknavhr">&nbsp;</div>
<div id="quicknav" class="grid_12">
    <a class="quicknavgrid_3 quicknav alpha" href="javascript:void(0)">
        <h4 class="title ">Recent Work</h4>
        <p>Cras vestibulum lorem et dui mollis sed posuere leo semper.</p>
        <p style="text-align:center;"><img alt="" src="images/Art_Artdesigner.lv.png" /></p>
    </a>
    <a class="quicknavgrid_3 quicknav" href="javascript:void(0)">
        <h4 class="title ">Learn about us</h4>
        <p>Cras vestibulum lorem et dui mollis sed posuere leo semper.</p>
        <p style="text-align:center;"><img alt="" src="images/info.png" /></p>
    </a>
    <a class="quicknavgrid_3 quicknav" href="javascript:void(0)">
        <h4 class="title ">Read our blog</h4>
        <p>Cras vestibulum lorem et dui mollis sed posuere leo semper.</p>
        <p style="text-align:center;"><img alt="" src="images/Blog_Artdesigner.lv.png" /></p>
    </a>
    <a class="quicknavgrid_3 quicknav" href="javascript:void(0)">
        <h4 class="title ">Follow on Twitter</h4>
        <p>Cras vestibulum lorem et dui mollis sed posuere leo semper.</p>
        <p style="text-align:center;"><img alt="" src="images/hungry_bird.png" /></p>
    </a>
</div>