<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 26/10/2018
 * Time: 1:46 PM
 */

namespace frontend\controllers;

use Yii;
use frontend\models\Posts;
use yii\web\Controller;

class PostsController extends Controller
{

    public function actionNewPost()
    {
        $model = new Posts();
        return $this->render('new-post',['model'=>$model]);
    }

    public function actionUrl()
    {
        return $this->render('url');
    }

}