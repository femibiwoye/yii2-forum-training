<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 22/11/2018
 * Time: 2:05 PM
 */
use yii\helpers\Url;
?>
<div class="wrap">
    <form action="<?=Url::to(['/posts'])?>" method="get" class="form">
        <div class="pull-left txt">
            <input type="text" name="s" class="form-control" placeholder="Search Topics"></div>
        <div class="pull-right"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button></div>
        <div class="clearfix"></div>
    </form>
</div>
