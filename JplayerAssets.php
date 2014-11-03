<?php

namespace xj\ueditor;

use Yii;
use yii\web\AssetBundle;

class UeditorAssets extends AssetBundle {

    public $sourcePath;
    public $basePath = '@webroot/assets';
    public $publishOptions = ['forceCopy' => YII_DEBUG];
    public $js = [];
    public $css = [];
    public $depends = ['yii\web\JqueryAsset'];

    private function getJs() {
        return [
            'ueditor.config.js',
            YII_DEBUG ? 'ueditor.all.js' : 'ueditor.all.min.js',
        ];
    }

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        if (empty($this->js)) {
            $this->js = $this->getJs();
        }
        return parent::init();
    }

}
