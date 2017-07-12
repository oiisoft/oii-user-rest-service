<?php

namespace oii\user;

class Module extends \yii\base\Module {
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'oii\user\controllers';
    
    /**
     * @inheritdoc
     */
    public function init() {
        parent::init();
    }
}