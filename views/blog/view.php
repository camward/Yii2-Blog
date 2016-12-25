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
            <p class="sub"><?=$post['date']?> &bull; <a href="#commentlist">7 Comments</a></p>
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
        <li class="comment">
            <div class="gravatar">
                <img alt="" src='/images/gravatar.png' height='48' width='48' />
                <a class="comment-reply-link" href=''>Reply</a>
            </div>
            <div class="comment_content">
                <div class="clearfix">
                    <cite class="author_name"><a href="">Joe Bloggs</a></cite>
                    <div class="comment-meta commentmetadata">January 6, 2010 at 6:26 am</div>
                </div>
                <div class="comment_text">
                    <p>Donec leo. Aliquam risus elit, luctus vel, interdum vitae, malesuada eget, elit. Nulla vitae ipsum. Donec ligula ante, bibendum sit amet, elementum quis, viverra eu, ante. Fusce tincidunt. Mauris pellentesque, arcu eget feugiat accumsan, ipsum mi molestie orci, ut pulvinar sapien lorem nec dui.</p>
                </div>
            </div>
        </li>
    </ol>

    <div class="hr clearfix">&nbsp;</div>

    <!-- Comment Form -->
    <form id="comment_form" action="" method="post">
        <h3>Add a comment</h3>
        <div class="hr dotted clearfix">&nbsp;</div>
        <ul>
            <li class="clearfix">
                <label for="name">Your Name</label>
                <input id="name" name="name" type="text" />
            </li>
            <li class="clearfix">
                <label for="email">Your Email</label>
                <input id="email" name="email" type="text" />
            </li>
            <li class="clearfix">
                <label for="email">Your Website</label>
                <input id="website" name="website" type="text" />
            </li>
            <li class="clearfix">
                <label for="message">Comment</label>
                <textarea id="message" name="message" rows="3" cols="40"></textarea>
            </li>
            <li class="clearfix">
                <!-- Add Comment Button -->
                <a type="submit" class="button medium black right">Add comment</a>
            </li>
        </ul>
    </form>
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