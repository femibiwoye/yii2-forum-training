<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 26/10/2018
 * Time: 1:46 PM
 */

namespace frontend\controllers;

use Faker\Factory;
use frontend\models\Category;
use frontend\models\Comments;
use frontend\models\Dislike;
use frontend\models\Feeder;
use Yii;
use frontend\models\Posts;
use yii\base\ErrorException;
use yii\base\Exception;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\web\UnauthorizedHttpException;

class PostsController extends Controller
{
    // public function behaviors()
    // {
    //     return [
    //         'access' => [
    //             'class' => AccessControl::className(),
    //             'only' => ['new-post'],
    //             /*'rules' => [
    //                 [
    //                     'actions' => ['new-post'],
    //                     'allow' => empty(Yii::$app->user->identity->image) ?false:true,
    //                     'roles' => ['@'],
    //                 ],
    //             ],*/
    //         ],

    //     ];
    // }

    /**public function beforeAction($action)
    {
        echo '<script type="application/javascript"> alert("Hello");</script>';

        return true;
    }*/

    public function actionIndex($s = null)
    {
        $query = Posts::find()->where(['status' => 1]);
        if (isset($s)) {
            $s = trim($s);
            $query->andWhere(['Like','topic',$s]);
            $query->orWhere(['Like','body',$s]);
        }

        /**
         * if (isset($s)) {
        $query = Posts::find()->where(['status' => 1])
        ->andWhere(['Like','topic',$s]);
        } else {
        $query = Posts::find()->where(['status' => 1]);
        }
         */


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
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
        $comment = new Comments();
        if ($model->exists()) {
            $model = $model->one();
            $model->views += 1;
            if ($model->save()) {
                if ($comment->load(Yii::$app->request->post())) {
                    $comment->post_id = $model->id;
                    $comment->user_id = Yii::$app->user->id;
                    if ($comment->save()) {
                        Yii::$app->session->setFlash('success', 'Your comment was successful');
                        return $this->refresh();
                    }
                }
            }
            return $this->render('view-post', ['model' => $model, 'comment' => $comment]);
        }

        throw new NotFoundHttpException('The page might has been moved or does not exist');

    }

    public function actionLike($id)
    {
        $post = Posts::findOne(['id' => $id]);
        $post->likes += 1;
        //$post->likes =$post->likes +1;
        if ($post->save()) {
            return $this->redirect(Yii::$app->request->referrer);
        }

    }

    public function actionDislike($id)
    {
        if (!Dislike::find()->where(['user_id' => Yii::$app->user->id, 'topic_id' => $id])->exists()) {
            $dislike = new Dislike();
            $dislike->topic_id = $id;
            $dislike->user_id = Yii::$app->user->id;
            $dislike->save();
        }
        return $this->redirect(Yii::$app->request->referrer);

    }

    public function actionUrl()
    {
        return $this->render('url');
    }

    public function actionFake()
    {
        $faker = \Faker\Factory::create();
        /*echo $faker->title;
        echo '<br>';
        echo Html::encode($faker->paragraph(9));
        echo '<br>';
        echo $faker->address;
        echo '<br>';
        echo $faker->bankAccountNumber;
        echo '<br>';
        echo $faker->boolean ? 'true':'false';
        echo '<br>';
        echo $faker->city;
        echo '<br>';
        echo $faker->citySuffix;
        echo '<br>';
        echo $faker->company;
        echo '<br>';
        echo $faker->companyEmail;
        echo '<br>';
        echo $faker->creditCardNumber;
        echo '<br>';
        print_r($faker->dateTime);
        echo '<br>';
        echo $faker->domainName;
        echo '<br>';
        echo $faker->firstNameMale;
        echo '<br>';
        echo $faker->firstNameFemale;
        echo '<br>';
        echo $faker->name;
        echo '<br>';
        echo $faker->phoneNumber;
        echo '<br>';
        echo $faker->password;
        echo '<br>';
        echo $faker->sentence;
        echo '<br>';
        echo $faker->word;
        echo '<br>';
        print_r($faker->words);
        echo '<br>';
        echo $faker->url;
        echo '<br>';*/
        //echo($faker->paragraph(20));
        //die;
        $cats = ['sport', 'sports', 'sports-2', 'family-matters'];
        for ($i = 1; $i < 5; $i++) {
            $post = new Posts();
            $post->category = $cats[rand(0, 3)];
            echo $i . ': ';
            echo $post->topic = $faker->sentence;
            echo '<br>';
            $post->user_id = Yii::$app->user->id;
            $post->body = $faker->paragraph(20);
            $post->save();
        }
    }

    public function actionQueueFeeder()
    {
        echo Yii::$app->queue->delay( 30)->push(new Feeder(['count'=>10]));
    }

    public function actionView($id)
    {
        try {

            $model = Posts::find()->where(['id' => $id])->asArray()->one();
            if (!$model) {
                //throw new NotFoundHttpException('The post you are looking for has either been moved or deleted');

                 throw new BadRequestHttpException();
                //throw new UnauthorizedHttpException();
            }
            echo json_encode($model);
        }
        catch (Exception $e) {
            //display custom message
            echo json_encode($e);
        }
    }

}

/**
 *  Original: $img = 2.png
 *
 * 20x20 "s".$img
 * 50x50 "m".$img
 */