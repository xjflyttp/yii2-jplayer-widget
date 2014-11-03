<?php

namespace xj\jplayer\skins;

use Yii;
use yii\web\AssetBundle;

class PinkAssets extends AssetBundle {

    public $basePath = '@webroot/assets';
    public $publishOptions = ['forceCopy' => YII_DEBUG];
    public $css = ['skin/pink.flag/jplayer.pink.flag.css'];

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'assets';
        return parent::init();
    }

}
