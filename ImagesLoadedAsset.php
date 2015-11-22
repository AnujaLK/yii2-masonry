<?php

namespace shiyang\masonry;

use yii\web\AssetBundle;

/**
 * @link http://www.shiyang.me
 * @author Shiyang <dr@shiyang.me> 
 */

class ImagesLoadedAsset extends AssetBundle
{
    public $sourcePath = '@bower/imagesloaded';

    public $css = [];
    
    public $js = [
            'jquery.imagesloaded.min.js'
    ];

    public $depends = array(
        'yii\web\JqueryAsset',
    );
}
