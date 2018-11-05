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

                <!-- -->
                <div class="sidebarblock">
                    <h3>Categories</h3>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <ul class="cats">
                            <li><a href="#">Trading for Money <span class="badge pull-right">20</span></a></li>
                            <li><a href="#">Vault Keys Giveway <span class="badge pull-right">10</span></a></li>
                            <li><a href="#">Misc Guns Locations <span class="badge pull-right">50</span></a></li>
                            <li><a href="#">Looking for Players <span class="badge pull-right">36</span></a></li>
                            <li><a href="#">Stupid Bugs &amp; Solves <span class="badge pull-right">41</span></a></li>
                            <li><a href="#">Video &amp; Audio Drivers <span class="badge pull-right">11</span></a></li>
                            <li><a href="#">2K Official Forums <span class="badge pull-right">5</span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- -->
                <div class="sidebarblock">
                    <h3>Poll of the Week</h3>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <p>Which game you are playing this week?</p>
                        <form action="#" method="post" class="form">
                            <table class="poll">
                                <tr>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                Call of Duty Ghosts
                                            </div>
                                        </div>
                                    </td>
                                    <td class="chbox">
                                        <input id="opt1" type="radio" name="opt" value="1">
                                        <label for="opt1"></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar color2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 63%">
                                                Titanfall
                                            </div>
                                        </div>
                                    </td>
                                    <td class="chbox">
                                        <input id="opt2" type="radio" name="opt" value="2" checked>
                                        <label for="opt2"></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar color3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                                Battlefield 4
                                            </div>
                                        </div>
                                    </td>
                                    <td class="chbox">
                                        <input id="opt3" type="radio" name="opt" value="3">
                                        <label for="opt3"></label>
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <p class="smal">Voting ends on 19th of October</p>
                    </div>
                </div>

                <!-- -->
                <div class="sidebarblock">
                    <h3>My Active Threads</h3>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <a href="#">This Dock Turns Your iPhone Into a Bedside Lamp</a>
                    </div>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <a href="#">Who Wins in the Battle for Power on the Internet?</a>
                    </div>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <a href="#">Sony QX10: A Funky, Overpriced Lens Camera for Your Smartphone</a>
                    </div>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <a href="#">FedEx Simplifies Shipping for Small Businesses</a>
                    </div>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <a href="#">Loud and Brave: Saudi Women Set to Protest Driving Ban</a>
                    </div>
                </div>


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
