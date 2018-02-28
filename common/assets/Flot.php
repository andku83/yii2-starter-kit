<?php

namespace common\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class Flot
 * @package common\assets
 */
class Flot extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/flot';
    /**
     * @var array
     */
    public $js = [
        'jquery.flot.js'
    ];

    /**
     * @var array
     */
    public $depends = [
        JqueryAsset::class
    ];
}
