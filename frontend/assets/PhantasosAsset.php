<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class PhantasosAsset extends AssetBundle {

    public $sourcePath = '@themes/phantasos';
    public $baseUrl = '@web';
    public $css = [
        '/css/animate.css',
        '/css/bootstrap.min.css',
        '/css/bootstrap.css',
        '/css/font-awesome.min.css',
        '/css/style.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/html5shiv.js',
        'js/magnific.min.js',
        'js/modernizr.js',
        'js/owl.carousel.min.js',
        'js/respond.min.js',
        'js/retina.min.js',
        'js/script.js',
        'js/smoothscroll.min.js',
        'js/wow.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
