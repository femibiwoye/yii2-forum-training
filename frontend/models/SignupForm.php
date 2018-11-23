<?php

namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $firstname;
    public $lastname;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname'], 'required'],
            [['firstname', 'lastname'], 'trim'],
            [['firstname', 'lastname'], 'string', 'max' => 100],


            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'My username'
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->firstname = $this->firstname;
        $user->lastname = $this->lastname;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        if ($user->save()) {
            $profile = new UserProfile();
            $profile->user_id = $user->id;
            $profile->save();

            $url = \Yii::$app->urlManager->createAbsoluteUrl(['/site/verify', 'token' => $user->auth_key]);
            /*$body = '
            <h1>Welcome to Yii2 Application forum</h1>
            <p>There are lots of discussion going on here</p>
            <p>To verify your email click on the link below</p>
            <a href="'.$url.'">'.$url.'</a>
            ';*/

            \Yii::$app->mailer->compose(['html'=>'welcome'],['user'=>$user,'url'=>$url])
                ->setTo($user->email)
               ->setFrom(['passng.recovery@gmail.com' => 'Welcome Yii application'])
                ->setSubject('Welcome to Yii Forum')
                //->setTextBody($this->body)
                //->setHtmlBody($body)
                ->send();


            return $user;
        } else {
            return null;
        }
        //return $user->save() ? $user : null;
    }
}
