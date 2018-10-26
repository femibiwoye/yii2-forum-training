<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user_profile".
 *
 * @property int $id
 * @property int $user_id
 * @property string $country
 * @property string $state
 * @property string $lga
 * @property string $street_name
 * @property int $house_no
 * @property string $occupation
 */
class UserProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['country', 'state', 'lga', 'street_name', 'house_no', 'occupation'],'safe'],
            [['user_id', 'house_no'], 'integer'],
            [['country', 'state', 'lga', 'street_name', 'occupation'], 'string', 'max' => 100],
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
            'country' => 'Country',
            'state' => 'State',
            'lga' => 'Lga',
            'street_name' => 'Street Name',
            'house_no' => 'House No',
            'occupation' => 'Occupation',
        ];
    }
}
