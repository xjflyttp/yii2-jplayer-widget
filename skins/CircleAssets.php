<?php

namespace xj\jplayer\skins;

use Yii;
use yii\web\AssetBundle;

class CircleAssets extends AssetBundle
{

    public $sourcePath = '@bower/circleplayer';
    public $basePath = '@webroot/assets';
    public $css = [
        'circle.skin/circle.player.css',
    ];
    public $js = [
        'js/jquery.transform2d.js',
        'js/jquery.grab.js',
        'js/mod.csstransforms.min.js',
        'js/circle.player.js',
    ];
    public $depends = ['xj\jplayer\CommonAssets'];

}
