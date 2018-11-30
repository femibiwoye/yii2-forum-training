<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 30/11/2018
 * Time: 1:25 PM
 */

namespace frontend\controllers;


use frontend\models\Posts;
use yii\rest\Controller;

class RssController extends Controller
{
    public function actionIndex()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $posts = Posts::find()
            ->alias('a')
            ->select([
                'a.id',
                'a.topic',
                'a.slug',
                "CONCAT(SUBSTRING(a.body, 1, 200),'...') body",
                "CONCAT(user.firstname,' ',user.lastname) poster",
                //"COUNT(dislike.topic_id) dislike",
                "(SELECT COUNT(*) FROM dislike WHERE dislike.topic_id=a.id) dislikes",
                'a.category',
                'a.views',
                'a.likes',
                "CONCAT('http://localhost/yii2-forum-training/posts/view-post?id=',a.slug) link"
                //'poster',
                //'dislikes'
            ])
            //->innerJoinWith('dislikes',false)
            ->innerJoin('user', 'user.id = a.user_id')
//            ->join('dislike', 'dislike.topic_id = a.id')
            //->joinWith('dislikesCount', false)
            ->asArray()
            ->all();

        //$post->poster->lastname

        return $posts;
    }

}