<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class NpAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'assets-enpii/bxslider-4/dist/jquery.bxslider.min.css',
    ];
    public $js = [
        '//maps.googleapis.com/maps/api/js?key=AIzaSyDGAxf0Y-XXykZNr3mMkdFF3wXiQ-amiq8',
        'assets-enpii/bxslider-4/dist/jquery.bxslider.min.js',
    ];
    public $depends = [
       
    ];
}
