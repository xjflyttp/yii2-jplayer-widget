<?php

namespace xj\jplayer\skins;

use Yii;
use yii\web\AssetBundle;

class CircleAssets extends AssetBundle {

    public $basePath = '@webroot/assets';
    public $publishOptions = ['forceCopy' => YII_DEBUG];
    public $css = ['skin/circle.skin/circle.player.css'];

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'assets';
        return parent::init();
    }

}
