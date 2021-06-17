<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.css',
        'css/bootstrap-responsive.css',
        'css/docs.css',
        'css/prettyPhoto.css',
        'css/google-code-prettify/prettify.css',
        'css/flexslider.css',
        'css/refineslide.css',
        'css/font-awesome.css',
        'css/animate.css',
        'css/style.css',
        'css/default.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700'
    ];
    public $js = [   
        "js/jquery.js",
        "js/modernizr.js",
        "js/jquery.easing.1.3.js",
        "js/google-code-prettify/prettify.js",
        "js/bootstrap.js",
        "js/jquery.prettyPhoto.js",
        "js/portfolio/jquery.quicksand.js",
        "js/portfolio/setting.js",
        "js/hover/jquery-hover-effect.js",
        "js/jquery.flexslider.js",
        "js/classie.js",
        "js/cbpAnimatedHeader,.min.js",
        "js/jquery.refineslide.js",
        "js/jquery.ui.totop.js",
        "js/custom.js",
        ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
     
    ];
}
