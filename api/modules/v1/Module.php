<?php

namespace api\modules\v1;

use Yii;
/**
 * v1 module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'api\modules\v1\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        Yii::$app->user->enableSession = false;
        Yii::$app->user->enableAutoLogin = false;
        // custom initialization code goes here
    }
}
