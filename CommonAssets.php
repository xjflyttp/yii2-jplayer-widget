<?php

namespace xj\jplayer;

use Yii;
use yii\web\AssetBundle;

class CommonAssets extends AssetBundle {

    public $basePath = '@webroot/assets';
    public $publishOptions = ['forceCopy' => YII_DEBUG];
    public $js = [];
    public $css = [];
    public $depends = ['yii\web\JqueryAsset'];

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        if (empty($this->js)) {
            $this->js = $this->getJs();
        }
        return parent::init();
    }

    protected function getJs() {
        return [
            'js/jquery.jplayer.min.js',
            'js/jquery.jplayer.inspector.js',
        ];
    }

}
