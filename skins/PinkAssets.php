<?php

namespace xj\jplayer\skins;

use Yii;
use yii\web\AssetBundle;

class PinkAssets extends AssetBundle
{

    public $sourcePath = '@bower/jplayer/dist';
    public $basePath = '@webroot/assets';
    public $css = ['skin/pink.flag/css/jplayer.pink.flag.css'];

}
