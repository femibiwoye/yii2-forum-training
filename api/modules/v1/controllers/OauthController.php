<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 07/12/2018
 * Time: 12:47 PM
 */

namespace api\modules\v1\controllers;


use api\modules\v1\models\LoginForm;
use api\modules\v1\models\User;
use frontend\models\SignupForm;
use yii\rest\Controller;
use Yii;

class OauthController extends Controller
{

    public function actionSignup()
    {
        $model = new SignupForm();
        /**
         * {
        "username":"jef",
        "email":"jef@gmail.com",
        "password":"password",
        "firstname":"Jef",
        "lastname":"Mack"
        }
         */

        //Yii::$app->request->post();
        //$firstname = Yii::$app->request->post('firstname');
        //return Yii::$app->getRequest()->getBodyParams();
        //die;
        if($model->load(Yii::$app->getRequest()->getBodyParams(),'')){
            $model->username =  Yii::$app->request->post('uname');
            if ($user = $model->signup()) {
                    return $user;
            }else{
                return $model;
            }
        }

     //   return 'Nothing is posted';
    }

    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->getRequest()->getBodyParams(),'') && $model->login()) {
            $user = User::findOne(['username'=>$model->username]);
            $user->token = Yii::$app->security->generateRandomString(32);
            $user->save();
            return $user->token;
        } else {
            return $model;
        }
    }
}