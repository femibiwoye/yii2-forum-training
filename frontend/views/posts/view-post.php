<?php

use yii\helpers\Url;

$this->title = $model->topic;
$web = Url::to('@web/');
?>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 breadcrumbf">
                <a href="<?=Yii::$app->homeUrl?>">Home</a> <span class="diviver">&gt;</span> <a href="<?=Url::to(['/posts/category','category'=>$model->category])?>"><?=$model->categories->title?></a> <span class="diviver">&gt;</span> <a href="#"><?=$model->topic?></a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">

                <!-- POST -->
                <div class="post beforepagination">
                    <div class="topwrap">
                        <div class="userinfo pull-left">
                            <div class="avatar">
                                <img width="50" src="<?=empty($model->poster->image)? $web.'images/avatar.jpg':$web.'images/'.$model->poster->image?>" alt="" />
                                <div class="status green">&nbsp;</div>
                            </div>

                            <div class="icons">
                                <img src="images/icon1.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon5.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
                            </div>
                        </div>
                        <div class="posttext pull-left">
                            <h2><?=$model->topic?></h2>
                            <p><?=$model->body?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="postinfobot">

                        <div class="likeblock pull-left">
                            <a href="<?=Url::to(['like','id'=>$model->id])?>" class="up"><i class="fa fa-thumbs-o-up"></i><?=$model->likes?></a>

                            <a href="<?=Url::to(['dislike','id'=>$model->id])?>" class="down <?=$model->dislikeStatus?'close':''?>"><i class="fa fa-thumbs-o-down"></i><?=$model->dislikesCount?></a>
                        </div>

                        <div class="prev pull-left">
                            <a href="#"><i class="fa fa-reply"></i></a>
                        </div>

                        <div class="posted pull-left"><i class="fa fa-clock-o"></i> Posted on : <?=date("d M @ h:ma",strtotime($model->created_at))?></div>

                        <div class="next pull-right">
                            <a href="#"><i class="fa fa-share"></i></a>

                            <a href="#"><i class="fa fa-flag"></i></a>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div><!-- POST -->

                <div class="paginationf">
                    <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
                    <div class="pull-left">
                        <ul class="paginationforum">
                            <li class="hidden-xs"><a href="#">1</a></li>
                            <li class="hidden-xs"><a href="#">2</a></li>
                            <li class="hidden-xs"><a href="#">3</a></li>
                            <li class="hidden-xs"><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#" class="active">7</a></li>
                            <li><a href="#">8</a></li>
                            <li class="hidden-xs"><a href="#">9</a></li>
                            <li class="hidden-xs"><a href="#">10</a></li>
                            <li class="hidden-xs hidden-md"><a href="#">11</a></li>
                            <li class="hidden-xs hidden-md"><a href="#">12</a></li>
                            <li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
                            <li><a href="#">1586</a></li>
                        </ul>
                    </div>
                    <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
                    <div class="clearfix"></div>
                </div>

                <!-- COMMENTS -->
                <?= $this->render('comments',['post'=>$model,'comment'=>$comment]);?>
                <!-- COMMENTS -->



                <!-- POST -->
                <div class="post">
                    <?=$this->render('comment-form',['comment'=>$comment,'model'=>$model])?>
                </div><!-- POST -->


            </div>
            <div class="col-lg-4 col-md-4">
                <?=$this->render('//site/_side')?>

            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
                <div class="pull-left">
                    <ul class="paginationforum">
                        <li class="hidden-xs"><a href="#">1</a></li>
                        <li class="hidden-xs"><a href="#">2</a></li>
                        <li class="hidden-xs"><a href="#">3</a></li>
                        <li class="hidden-xs"><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#" class="active">7</a></li>
                        <li><a href="#">8</a></li>
                        <li class="hidden-xs"><a href="#">9</a></li>
                        <li class="hidden-xs"><a href="#">10</a></li>
                        <li class="hidden-xs hidden-md"><a href="#">11</a></li>
                        <li class="hidden-xs hidden-md"><a href="#">12</a></li>
                        <li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
                        <li><a href="#">1586</a></li>
                    </ul>
                </div>
                <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

</section>
