<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 21/11/2018
 * Time: 12:16 PM
 */
use frontend\components\TimeReader;
use frontend\components\BodyShorter;
use yii\helpers\Url;
?>

<div class="post">
    <div class="wrap-ut pull-left">
        <div class="userinfo pull-left">
            <div class="avatar">
                <img src="<?=empty($model->poster->image)? $web.'images/avatar.jpg':$web.'images/'.$model->poster->image?>" width="50" alt="" />
                <div class="status green">&nbsp;</div>
            </div>

            <div class="icons">
                <img src="images/icon1.jpg" alt="" /><img src="images/icon4.jpg" alt="" />
            </div>
        </div>
        <div class="posttext pull-left">
            <h2><a href="<?=Url::to(['/posts/view-post','id'=>$model->slug])?>"><?=$model->topic?></a></h2>
            <p><?=BodyShorter::widget(['body' => $model->body,'id' => $model->slug])?></p>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="postinfo pull-left">
        <div class="comments">
            <div class="commentbg">
                <?=$model->commentsCount?>
                <div class="mark"></div>
            </div>

        </div>
        <div class="views"><i class="fa fa-eye"></i> <?=$model->views?></div>
        <div class="time"><i class="fa fa-clock-o"></i> <?=TimeReader::widget(['time'=>$model->created_at])?></div>
    </div>
    <div class="clearfix"></div>
</div>
