<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use frontend\components\BodyShorter;
use frontend\components\TimeReader;
$this->title = 'Welcome to Forum';
$web = Url::to('@web/');
?>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xs-12 col-md-8">
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


    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">

                <?php foreach($posts as $post){?>
                <!-- POST -->
                <div class="post">
                    <div class="wrap-ut pull-left">
                        <div class="userinfo pull-left">
                            <div class="avatar">
                                <img src="<?=empty($post->poster->image)? $web.'images/avatar.jpg':$web.'images/'.$post->poster->image?>" width="50" alt="" />
                                <div class="status green">&nbsp;</div>
                            </div>

                            <div class="icons">
                                <img src="images/icon1.jpg" alt="" /><img src="images/icon4.jpg" alt="" />
                            </div>
                        </div>
                        <div class="posttext pull-left">
                            <h2><a href="<?=Url::to(['/posts/view-post','id'=>$post->slug])?>"><?=$post->topic?></a></h2>
                            <p><?=BodyShorter::widget(['body' => $post->body,'id' => $post->slug])?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="postinfo pull-left">
                        <div class="comments">
                            <div class="commentbg">
                                <?=$post->commentsCount?>
                                <div class="mark"></div>
                            </div>

                        </div>
                        <div class="views"><i class="fa fa-eye"></i> <?=$post->views?></div>
                        <div class="time"><i class="fa fa-clock-o"></i> <?=TimeReader::widget(['time'=>$post->created_at])?></div>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- POST -->
                <?php } ?>





            </div>
            <div class="col-lg-4 col-md-4">
<?=$this->render('_side')?>

            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xs-12">
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