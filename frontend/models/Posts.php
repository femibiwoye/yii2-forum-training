<?php

namespace frontend\models;

use Yii;

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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'category', 'slug', 'topic', 'body'], 'required'],
            [['user_id', 'category', 'likes', 'status'], 'integer'],
            [['body'], 'string'],
            [['created_at'], 'safe'],
            [['slug', 'topic'], 'string', 'max' => 200],
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
}
