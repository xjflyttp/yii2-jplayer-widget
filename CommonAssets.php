<?php

namespace xj\jplayer;

use Yii;
use yii\web\AssetBundle;

class CommonAssets extends AssetBundle
{
    public $sourcePath = '@bower/jplayer/dist';
    public $basePath = '@webroot/assets';
    public $js = [
        'jplayer/jquery.jplayer.js',
        'add-on/jquery.jplayer.inspector.js',
    ];
    public $depends = ['yii\web\JqueryAsset'];

}
