<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 06/12/2018
 * Time: 11:46 AM
 */

namespace api\modules\v1\controllers;


use frontend\models\Posts;
use yii\filters\auth\HttpBearerAuth;
use yii\rest\ActiveController;
use yii\rest\Controller;
use Yii;

class PostsController extends Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::className()
        ];
        return $behaviors;
    }


    public function actionIndex()
    {
        return Posts::find()->all();
    }

    public function actionProfile()
    {
     return Yii::$app->user->identity;
    }

    public function actionView($id)
    {
        return $id;
        //return Posts::findOne(['id'=>$id]);
    }

    public function actionCreate()
    {
     $firstname = Yii::$app->request->post('firstname');
     $lastname = Yii::$app->request->post('lastname');

     /*$model = new Posts();
     $model->firstname = $firstname;
     $model->save()*/

     return ['request is successful'];
    }
    //public $modelClass = 'frontend\models\Posts';


}