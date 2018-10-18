<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 18/10/2018
 * Time: 12:19 PM
 */

namespace frontend\controllers;


use yii\web\Controller;

class AboutUsController extends Controller
{
    public function actionIndex(){
        //echo 'This is about page';
        ////return $this->render('//site/about');
        return $this->render('@frontend/views/site/about');
    }

}