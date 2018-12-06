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



<?php foreach($movies as $movie){?>

    <div class="post">
        <div class="wrap-ut pull-left">
            <div class="userinfo pull-left">
                <div class="avatar">
                    <img src="<?=$movie->ImageURL?>" width="300" alt="" />
                    <div class="status green">&nbsp;</div>
                </div>

                <div class="icons">
                    <img src="images/icon1.jpg" alt="" /><img src="images/icon4.jpg" alt="" />
                </div>
            </div>
            <div class="posttext pull-left">
                <h2><a href=""><?=$movie->fulltitle?></a></h2>
                <p><?=BodyShorter::widget(['body' =>$movie->summary,'id' => $movie->Title])?></p>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
    </div>


<?php } ?>


            </div>
            <div class="col-lg-4 col-md-4">
<?=$this->render('//site/_side')?>

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