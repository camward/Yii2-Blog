<?
$this->title = $posts[0]['name'].' - Блог';
$this->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
$this->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<!-- Caption Line -->
<h2 class="grid_12 caption clearfix">Our <span>blog</span>, keeping you up-to-date on our latest news.</h2>

<div class="hr grid_12 clearfix">&nbsp;</div>

<!-- Column 1 /Content -->
<div class="grid_8">

    <!-- Blog Post -->
    <?foreach($posts as $post):?>
        <div class="post">
            <!-- Post Title -->
            <h3 class="title"><a href="javascript:void(0)"><?=$post['name']?></a></h3>
            <!-- Post Title -->
            <p class="sub"><?=$post['date']?> &bull; <a href="#commentlist"><?=$comment?> Comments</a></p>
            <div class="hr dotted clearfix">&nbsp;</div>
            <!-- Post Title -->
            <img class="thumb" src="/images/<?=$post['images']?>" />
            <!-- Post Content -->
            <?=$post['text']?>
            <!-- Post Links -->
            <p class="clearfix">
                <?=\yii\helpers\Html::a('&lt;&lt; Back to Blog', ['blog/index'], ['class' => 'button float'])?>
                <a href="#comment_form" class="button float right" >Discuss this post</a>
            </p>
        </div>
        <div class="hr clearfix">&nbsp;</div>
    <?endforeach;?>

    <!-- Comment's List -->
    <h3 id="commentlist">Comments</h3>
    <div class="hr dotted clearfix">&nbsp;</div>

    <ol class="commentlist">
        <?foreach($comment_list as $comments):?>
            <li class="comment" style="margin-bottom: 20px;">
                <div class="gravatar">
                    <img alt="" src='/images/gravatar.png' height='48' width='48' />
                </div>
                <div class="comment_content">
                    <div class="clearfix">
                        <cite class="author_name"><a href="javascript:void(0)"><?=$comments['name']?></a></cite>
                        <div class="comment-meta commentmetadata"><?=$comments['email']?></div>
                    </div>
                    <div class="comment_text">
                        <?=$comments['text']?>
                    </div>
                </div>
            </li>
        <?endforeach;?>
    </ol>

    <div class="hr clearfix">&nbsp;</div>

    <!-- Comment Form -->
    <h3 id="comment_form">Add a comment</h3>
    <div class="hr dotted clearfix">&nbsp;</div>

    <?if(Yii::$app->session->hasFlash('success')):?>
        <div class="alert alert-success alert-dismissable">
            <?=Yii::$app->session->getFlash('success')?>
        </div>
    <?endif;?>
    <?if(Yii::$app->session->hasFlash('error')):?>
        <div class="alert alert-danger alert-dismissable">
            <?=Yii::$app->session->getFlash('error')?>
        </div>
    <?endif;?>

    <?$form = ActiveForm::begin();?>
    <fieldset>
        <?=$form->field($model, 'name')?>
        <?=$form->field($model, 'email')?>
        <?=$form->field($model, 'text')->textarea(['rows' => 5])?>
    </fieldset>
    <div class="link-form">
        <?=Html::resetButton('Очистить', ['class' => 'btn btn-default btn-sm'])?>
        <?=Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-sm'])?>
    </div>
    <div class="clear"></div>
    <?ActiveForm::end();?>
    <br />
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