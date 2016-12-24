<?
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<!-- Caption Line -->
<h2 class="grid_12 caption clearfix">Enjoyed looking at our work? Don't hesitate to <span>contact us</span>!</h2>
<div class="hr grid_12 clearfix">&nbsp;</div>

<!-- Column 1 / Content -->
<div class="grid_8">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel porta erat. Quisque sit amet risus at odio pellentesque sollicitudin. Proin suscipit molestie facilisis. Aenean vel massa magna. Proin nec lacinia augue. Mauris venenatis libero nec odio viverra consequat. In hac habitasse platea dictumst.</p>
    <!-- Contact Form -->
    <h3>Contact Form</h3>
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
        <?=$form->field($model, 'text')->textarea(['rows' => 10])?>
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
<div class="grid_4 contact">
    <!-- Adress and Phone Details -->
    <h4 style="margin-top: 0px!important;">Address and Phone</h4>
    <div class="hr dotted clearfix">&nbsp;</div>
    <ul>
        <li>
            <strong>Your Company Name</strong><br />
            1458 Sample Road, Redvalley<br />
            City (State) H4Q 1J7<br />
            Country<br /><br />
        </li>
        <li>USA - (888) 888-8888</li>
        <li>Worldwide - (888) 888-8888</li>
    </ul>
    <!-- Email Addresses -->
    <h4>Emails</h4>
    <div class="hr dotted clearfix">&nbsp;</div>
    <ul>
        <li>General - <a href="mailto:info@yourcompany.com">info@yourcompany.com</a></li>
        <li>Sales - <a href="mailto:sales@yourcompany.com">sales@yourcompany.com</a></li>
    </ul>
    <!-- Social Profile Links -->
    <h4>Social Profiles</h4>
    <div class="hr dotted clearfix">&nbsp;</div>
    <ul>
        <li class="float"><a href="javascript:void(0)"><img src="images/twitter.png" title="Twitter" /></a></li>
        <li class="float"><a href="javascript:void(0)"><img src="images/facebook.png" title="Facebook" /></a></li>
        <li class="float"><a href="javascript:void(0)"><img src="images/stumbleupon.png" title="StumbleUpon" /></a></li>
        <li class="float"><a href="javascript:void(0)"><img src="images/flickr.png" title="Flickr" /></a></li>
        <li class="float"><a href="javascript:void(0)"><img src="images/delicious.png" title="Delicious" /></a></li>
    </ul>

</div>