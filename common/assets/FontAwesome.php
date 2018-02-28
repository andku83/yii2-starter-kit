<?php

namespace common\assets;

use yii\web\AssetBundle;

/**
 * Class FontAwesome
 * @package common\assets
 */
class FontAwesome extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/font-awesome';
    /**
     * @var array
     */
    public $css = [
        'css/font-awesome.min.css'
    ];
}
