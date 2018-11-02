<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 26/10/2018
 * Time: 1:46 PM
 */

namespace frontend\controllers;

use frontend\models\Category;
use frontend\models\Comments;
use frontend\models\Dislike;
use Yii;
use frontend\models\Posts;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;

class PostsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['new-post'],
                /*'rules' => [
                    [
                        'actions' => ['new-post'],
                        'allow' => empty(Yii::$app->user->identity->image) ?false:true,
                        'roles' => ['@'],
                    ],
                ],*/
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
        $comment = new Comments();
        if ($model->exists()) {
            $model = $model->one();
            $model->views += 1;
            if($model->save()){
                if($comment->load(Yii::$app->request->post())){
                    $comment->post_id = $model->id;
                    $comment->user_id = Yii::$app->user->id;
                    if($comment->save()){
                        Yii::$app->session->setFlash('success','Your comment was successful');
                        return $this->refresh();
                    }
                }
            }
            return $this->render('view-post', ['model' => $model,'comment'=>$comment]);
        }

        throw new NotFoundHttpException('The page might has been moved or does not exist');

    }

    public function actionLike($id){
        $post = Posts::findOne(['id'=>$id]);
        $post->likes +=1;
        //$post->likes =$post->likes +1;
        if($post->save()){
            return $this->redirect(Yii::$app->request->referrer);
        }

    }

    public function actionDislike($id){
        if(!Dislike::find()->where(['user_id'=> Yii::$app->user->id,'topic_id'=>$id])->exists()) {
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

}

/**
 *  Original: $img = 2.png
 *
 * 20x20 "s".$img
 * 50x50 "m".$img
 */