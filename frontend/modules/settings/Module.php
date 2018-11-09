<?php

namespace frontend\modules\settings;

/**
 * settings module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'frontend\modules\settings\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->modules = [
            'account' => [
                'class' => 'frontend\modules\settings\account\Module',
                //'defaultRoute' => '/settings/dashboard/index',
            ],
        ];

        // custom initialization code goes here
    }
}
