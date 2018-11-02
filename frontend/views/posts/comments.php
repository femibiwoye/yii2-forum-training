<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 02/11/2018
 * Time: 12:55 PM
 */

?>
<?php //foreach ($comments->comments as $Onecomment):?>
<?php //for($i=0; $i<count($comments->comments); $i++) :?>
<?php for ($i = 0; $i < $post->commentsCount; $i++) : ?>
    <div class="post">
        <div class="topwrap">
            <div class="userinfo pull-left">
                <div class="avatar">
                    <img src="images/avatar2.jpg" alt=""/>
                    <div class="status red">&nbsp;</div>
                </div>

                <div class="icons">
                    <img src="images/icon3.jpg" alt=""/><img src="images/icon4.jpg" alt=""/><img src="images/icon5.jpg"
                                                                                                 alt=""/><img
                            src="images/icon6.jpg" alt=""/>
                </div>
            </div>
            <?php if($post->comments[$i]->first > 0){ ?>
            <div class="posttext pull-left">
                <blockquote>
                    <span class="original">Original Posted by - theguy_21:</span>
                    Did you see that Dove ad pop up in your Facebook feed this year? How about the Geico camel one?
                </blockquote>
                <p><?= $post->comments[$i]->comment ?><?php //=$Onecomment->comment?></p>
            </div>
<?php }else{ ?>
                <div class="posttext pull-left">

                    <p><?= $post->comments[$i]->comment ?><?php //=$Onecomment->comment?></p>
                </div>
        <?php } ?>
            <div class="clearfix"></div>
        </div>
        <div class="postinfobot">

            <div class="likeblock pull-left">
                <a href="#" class="up"><i class="fa fa-thumbs-o-up"></i>10</a>
                <a href="#" class="down"><i class="fa fa-thumbs-o-down"></i>1</a>
            </div>

            <div class="prev pull-left">
                <a href="#"><i class="fa fa-reply"></i></a>
            </div>

            <div class="posted pull-left"><i class="fa fa-clock-o"></i> Posted on : 20 Nov @ 9:45am</div>

            <div class="next pull-right">
                <a href="#"><i class="fa fa-share"></i></a>

                <a href="#"><i class="fa fa-flag"></i></a>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
<?php endfor; ?>