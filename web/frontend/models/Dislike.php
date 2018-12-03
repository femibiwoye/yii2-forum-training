<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dislike".
 *
 * @property int $id
 * @property int $topic_id
 * @property int $user_id
 */
class Dislike extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dislike';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic_id', 'user_id'], 'required'],
            [['topic_id', 'user_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'topic_id' => 'Topic ID',
            'user_id' => 'User ID',
        ];
    }
}
