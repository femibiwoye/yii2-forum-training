<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property int $user_id
 * @property string $category
 * @property string $slug
 * @property string $topic
 * @property string $body
 * @property int $likes
 * @property int $views
 * @property int $status
 * @property string $created_at
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'category', 'slug', 'topic', 'body'], 'required'],
            [['user_id', 'likes', 'views', 'status'], 'integer'],
            [['body'], 'string'],
            [['created_at'], 'safe'],
            [['category'], 'string', 'max' => 100],
            [['slug', 'topic'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
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
            'views' => 'Views',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
