<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/reset.css',
        'css/styles.css',
    ];
    public $js = [
        'js/jquery-1.11.1.js',
        'js/jquery.roundabout-1.0.min.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.roundabout-shapes-1.1.js',
        'js/script.js',
    ];
    public $depends = [
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
