<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
$web = Url::to('@web/');
?>

<?php $form = ActiveForm::begin(); ?>


<div class="topwrap">
    <div class="userinfo pull-left">
        <div class="avatar">
            <img src="<?=empty(Yii::$app->user->identity->image)? $web.'images/avatar.jpg':$web.'images/'.Yii::$app->user->identity->image?>" width="50" alt="" />
            <div class="status red">&nbsp;</div>
        </div>

        <div class="icons">
            <img src="images/icon3.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon5.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
        </div>
    </div>
    <div class="posttext pull-left">
        <div class="textwraper">
            <div class="postreply">Post a Reply</div>
            <?php $comment->comment = ''; ?>
            <?=$form->field($comment,'first')->textInput(['value'=>isset($cId)?$cId : 0])->label(false)?>
            <?=$form->field($comment, 'comment')->textarea(['placeholder'=>'Type your message here','rows'=>isset($row) ? $row : 5])->label(false)?>

        </div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="postinfobot">

    <div class="notechbox pull-left">
        <input type="checkbox" name="note" id="note" class="form-control" />
    </div>

    <div class="pull-left">
        <label for="note"> Email me when some one post a reply</label>
    </div>

    <div class="pull-right postreply">
        <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
        <div class="pull-left"><button type="submit" class="btn btn-primary">Post Reply</button></div>
        <div class="clearfix"></div>
    </div>


    <div class="clearfix"></div>
</div>

<?php ActiveForm::end()?>

