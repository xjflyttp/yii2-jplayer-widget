<?php

namespace xj\jplayer;

use Yii;
use yii\web\AssetBundle;

class CircleAssets extends AssetBundle {

    public $basePath = '@webroot/assets';
    public $publishOptions = ['forceCopy' => YII_DEBUG];
    public $css = [];
    public $js = [
        'js/jquery.transform2d.js', 'js/jquery.grab.js',
        'js/mod.csstransforms.min.js', 'js/circle.player.js',
    ];
    public $depends = ['xj\jplayer\CommonAssets'];

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        return parent::init();
    }

}
