<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 26/10/2018
 * Time: 1:46 PM
 */

namespace frontend\controllers;

use frontend\models\Category;
use Yii;
use frontend\models\Posts;
use yii\web\Controller;
use yii\filters\AccessControl;

class PostsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['new-post'],
                'rules' => [
                    [
                        'actions' => ['new-post'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],

        ];
    }

    public function actionNewPost()
    {
        $model = new Posts();
        $categories = Category::find()->all();
        if ($model->load(Yii::$app->request->post())) {
            $model->user_id = Yii::$app->user->id;
            if ($model->save()) {
                return $this->redirect(['view-post', 'id' => $model->slug]);
            }
        }


        return $this->render('new-post', [
            'model' => $model,
            'categories' => $categories
        ]);
    }

    public function actionViewPost($id)
    {
        //Option 1
        /*$model = Posts::findOne(['slug'=>$id]);
        if($model){
            echo $model->topic;
        }*/

        //Option 2
        $model = Posts::find()->where(['slug' => $id]);
        if ($model->exists()) {
            $model = $model->one();
            $model->views += 1;
            $model->save();
            return $this->render('view-post', ['model' => $model]);
        }

    }

    public function actionUrl()
    {
        return $this->render('url');
    }

}

/**
 *  Original: $img = 2.png
 *
 * 20x20 "s".$img
 * 50x50 "m".$img
 */