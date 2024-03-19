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
//        'css/site.css',
        'css/top.css',
        'css/header.css',
//        'css/top.css',
        'css/auto.css',
//        'css/top.css',
        'css/product_style.css',
        'css/slick.css',
        'css/popup.css',

//        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
    ];
    public $js = [
        'css/script.js',
        'css/popup.js',
        'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js',
        'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
