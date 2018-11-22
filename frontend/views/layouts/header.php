<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 18/10/2018
 * Time: 12:40 PM
 */

use yii\helpers\Url;
use yii\helpers\Html;
?>
<!-- Slider -->
<div class="tp-banner-container">
    <div class="tp-banner" >
        <ul>
            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                <!-- MAIN IMAGE -->
                <img src="<?=Url::to('@web/')?>images/slide.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                <!-- LAYERS -->
            </li>
        </ul>
    </div>
</div>
<!-- //Slider -->

<div class="headernav">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-xs-3 col-sm-2 col-md-2 logo "><a href="index.html"><img src="images/logo.jpg" alt=""  /></a></div>
            <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
                <div class="dropdown">
                    <a data-toggle="dropdown" href="#" >Borderlands 2</a> <b class="caret"></b>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Borderlands 1</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-2" href="#">Borderlands 2</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-3" href="#">Borderlands 3</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                <?=$this->render('search')?>
            </div>
            <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                <div class="stnt pull-left">
                    <?=Html::a( 'Start New Topic',['/posts/new-post'],['class'=>'btn btn-primary'])?>
                </div>
                <div class="env pull-left"><i class="fa fa-envelope"></i></div>

                <div class="avatar pull-left dropdown">
                    <a data-toggle="dropdown" href="#"><img src="images/avatar.jpg" alt="" /></a> <b class="caret"></b>
                    <div class="status green">&nbsp;</div>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">My Profile</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-2" href="#">Inbox</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-3" href="#">Log Out</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-4" href="04_new_account.html">Create account</a></li>
                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
