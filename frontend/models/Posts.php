<?php

namespace frontend\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property int $user_id
 * @property int $category
 * @property string $slug
 * @property string $topic
 * @property string $body
 * @property int $likes
 * @property int $status
 * @property string $created_at
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    public function behaviors()
    {
        return [
            [
                'class'=>SluggableBehavior::className(),
                'attribute' => 'topic',
                'ensureUnique' => true,

            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'category', 'slug', 'topic', 'body'], 'required'],
            [['user_id', 'likes', 'status','views'], 'integer'],
            [['body'], 'string'],
            [['created_at'], 'safe'],
            [['slug', 'topic'], 'string', 'max' => 200],
            [['category'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'category' => 'Category',
            'slug' => 'Slug',
            'topic' => 'Topic',
            'body' => 'Body',
            'likes' => 'Likes',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    public function getCategories()
    {
        return $this->hasOne(Category::className(),['slug'=>'category']);
    }

    public function getDislikesCount()
    {
        return $this->hasMany(Dislike::className(),['topic_id'=>'id'])->count();
    }

    public function getCommentsCount()
    {
        return $this->hasMany(Comments::className(),['post_id'=>'id'])->count();
    }

    public function getComments()
    {
        return $this->hasMany(Comments::className(),['post_id'=>'id']);
    }

    public function getPoster()
    {
        return $this->hasOne(User::className(),['id'=>'user_id']);
    }

    public function getDislikeStatus()
    {
        return $this->hasOne(Dislike::className(),['topic_id'=>'id'])->andWhere(['user_id'=>Yii::$app->user->id])->exists();
    }
}
