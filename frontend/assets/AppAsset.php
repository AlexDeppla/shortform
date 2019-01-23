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
        'public/bootstrap/css/bootstrap.min.css',
        'css/style.css',
        'css/site.css',
    ];
    public $js = [
        'public/jquery/jquery.min.js',
        'public/bootstrap/js/bootstrap.bundle.min.js',
        'js/main.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
