<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 18/10/2018
 * Time: 12:40 PM
 */
use yii\helpers\Url;
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-xs-3 col-sm-2 logo "><a href="#"><img src="images/logo.jpg" alt=""  /></a></div>
            <div class="col-lg-8 col-xs-9 col-sm-5 ">Copyrights 2014, websitename.com</div>
            <div class="col-lg-3 col-xs-12 col-sm-5 sociconcent">
                <ul class="socialicons">
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-cloud"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>


<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="<?=Url::to('@web/')?>rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?=Url::to('@web/')?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="<?=Url::to('@web/')?>js/bootstrap.min.js"></script>
<script type="text/javascript">

    var revapi;

    jQuery(document).ready(function() {
        "use strict";
        revapi = jQuery('.tp-banner').revolution(
            {
                delay: 15000,
                startwidth: 1200,
                startheight: 278,
                hideThumbs: 10,
                fullWidth: "on"
            });

    });	//ready

</script>

