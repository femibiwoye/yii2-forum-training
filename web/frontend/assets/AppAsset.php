<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/bootstrap.min.css',
        'css/custom.css',
        'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
        'font-awesome-4.0.3/css/font-awesome.min.css',
        'css/style.css',
        'rs-plugin/css/settings.css'
    ];
    public $js = [
        //'http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js',
       /* 'rs-plugin/js/jquery.themepunch.plugins.min.js',
        'rs-plugin/js/jquery.themepunch.revolution.min.js',
        'js/bootstrap.min.js'*/
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
