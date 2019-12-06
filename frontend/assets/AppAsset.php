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
        'https://fonts.googleapis.com/css?family=Poppins:400,500,600',
        'css/bootstrap.min.css',
        'css/style.css',
        'css/owl.carousel.min.css',
        'css/site.css',
    ];
    public $js = [
        'js/jquery-3.3.1.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/imagesloaded.pkgd.min.js',
        'js/isInViewport.jquery.js',
        'js/jquery.particleground.min.js',
        'js/owl.carousel.min.js',
        'js/scrolla.jquery.min.js',
        'js/jquery.validate.min.js',
        'js/jquery-validate.bootstrap-tooltip.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js',
        'js/jquery.wavify.js',
        'js/custom.js',
        'js/jquery.easing.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'rmrevin\yii\fontawesome\NpmFreeAssetBundle'
    ];
}
