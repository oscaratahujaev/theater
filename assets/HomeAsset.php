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
class HomeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'js/vendor/jquery-1.11.3.min.js',
        'js/vendor/jquery-migrate.min.js',
        'js/vendor/revslider/rs-plugin/js/jquery.themepunch.tools.min.js',
        'js/vendor/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js',
        'js/custom/__main.js',
        'js/vendor/__packed.js',
//        'js/vendor/SmoothScroll.min.js',
        'js/custom/shortcodes_init.js',
        'js/custom/_utils.js',
        'js/custom/_front.js',
//        'js/custom/_googlemap_init.js',
//        'js/map.js',


    ];
    public $css = [
        'js/vendor/revslider/rs-plugin/css/settings.css',
        'css/__packed.css',
        'css/fontello/css/fontello.css',
        'css/fontello/css/animation.css',
        'css/style.css',
        'css/shortcodes.css',
        'css/responsive.css',
        'css/healthcare.css',
        'css/kidscare.css',
        'css/site.css'

    ];
    public $depends = [
        //        'yii\web\YiiAsset',
        //        'yii\bootstrap\BootstrapAsset',
    ];
}
