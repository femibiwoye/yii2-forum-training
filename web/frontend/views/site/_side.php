<?php

/*use frontend\models\Category;
$categories = Category::find()->all();*/

$categories = \frontend\models\Category::find()->all();




?>
<div class="sidebarblock">
    <h3>Categories</h3>
    <div class="divline"></div>
    <div class="blocktxt">
        <ul class="cats">
            <?php foreach($categories as $category){
                //$catCount = \frontend\models\Posts::find()->where(['category'=>$category->slug])->count();
                ?>
            <li><a href="#"><?=$category->title?> <span class="badge pull-right"><?=$category->postCount?></span></a></li>
            <?php } ?>
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

