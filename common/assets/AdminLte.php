<?php

namespace common\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;
use yii\jui\JuiAsset;
use yii\bootstrap\BootstrapPluginAsset;

/**
 * Class AdminLte
 * @package common\assets
 */
class AdminLte extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/admin-lte/dist';
    /**
     * @var array
     */
    public $js = [
        'js/app.min.js'
    ];
    /**
     * @var array
     */
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css'
    ];
    /**
     * @var array
     */
    public $depends = [
        JqueryAsset::class,
        JuiAsset::class,
        BootstrapPluginAsset::class,
        FontAwesome::class,
        JquerySlimScroll::class
    ];
}
