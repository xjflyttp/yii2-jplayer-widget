<?php

namespace xj\jplayer\skins;

use Yii;
use yii\web\AssetBundle;

class BlueAssets extends AssetBundle
{

    public $sourcePath = '@bower/jplayer/dist';
    public $basePath = '@webroot/assets';
    public $css = ['skin/blue.monday/css/jplayer.blue.monday.css'];

}
