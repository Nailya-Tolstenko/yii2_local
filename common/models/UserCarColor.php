<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_car_color".
 *
 * @property int $id id
 * @property string $color цвет
 *
 * @property UserCar[] $userCars
 */
class UserCarColor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_car_color';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['color'], 'required'],
            [['color'], 'string', 'max' => 6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'color' => 'цвет',
        ];
    }

    /**
     * Gets query for [[UserCars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserCars()
    {
        return $this->hasMany(UserCar::class, ['id_user_car_color' => 'id']);
    }
}
