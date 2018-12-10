<?php
namespace frontend\models;

use yii\base\BaseObject;

class Feeder extends BaseObject implements \yii\queue\JobInterface
{
    public $count;

    public function execute($queue)
    {
        $faker = \Faker\Factory::create();

        $cats = ['sport', 'sports', 'sports-2', 'family-matters'];
        for ($i = 1; $i < $this->count; $i++) {
            $post = new Posts();
            $post->category = $cats[rand(0, 3)];
            $post->topic = $faker->sentence;
            $post->user_id = 2;//\Yii::$app->user->id;
            $post->body = $faker->paragraph(20);
            $post->save();
        }
    }
}
