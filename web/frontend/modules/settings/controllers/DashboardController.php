<?php

namespace frontend\modules\settings\controllers;

use yii\web\Controller;

/**
 * Default controller for the `settings` module
 */
class DashboardController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
