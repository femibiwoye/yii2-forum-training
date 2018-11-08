<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property int $post_id
 * @property int $user_id
 * @property string $comment
 * @property int $likes
 * @property int $dislikes
 * @property string $created_at
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'user_id', 'comment'], 'required'],
            [['first','second'],'safe'],
            [['post_id', 'user_id', 'likes', 'dislikes'], 'integer'],
            [['comment'], 'string'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Post ID',
            'user_id' => 'User ID',
            'comment' => 'Comment',
            'likes' => 'Likes',
            'dislikes' => 'Dislikes',
            'created_at' => 'Created At',
        ];
    }

    public function getReferr()
    {
        return $this->hasOne(Comments::className(),['id'=>'first']);
    }

    public function getReferrFirst()
    {
        return $this->hasOne(Comments::className(),['id'=>'second','first'=>'first']);
    }

    public function getUsername()
    {
        return $this->hasOne(User::className(), ['id'=>'user_id']);
    }

    public function getFirstCommentsCount()
    {
        return $this->hasMany(Comments::className(),['first'=>'id'])->andFilterWhere(['second'=>0])->count();
    }

    public function getFirstComments()
    {
        return $this->hasMany(Comments::className(),['first'=>'id'])->andFilterWhere(['second'=>0]);
    }

    public function getSecondCommentsCount()
    {
        return $this->hasMany(Comments::className(),['second'=>'id'])->count();
    }

    public function getSecondComments()
    {
        return $this->hasMany(Comments::className(),['second'=>'id']);
    }
}
