<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_car".
 *
 * @property int $id id
 * @property int $id_user пользователь
 * @property int $id_user_car_color цвет
 * @property string $car авто
 *
 * @property User $user
 * @property UserCarColor $userCarColor
 */
class UserCar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_car';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_user_car_color', 'car'], 'required'],
            [['id_user', 'id_user_car_color'], 'integer'],
            [['car'], 'string', 'max' => 50],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
            [['id_user_car_color'], 'exist', 'skipOnError' => true, 'targetClass' => UserCarColor::class, 'targetAttribute' => ['id_user_car_color' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'id_user' => 'пользователь',
            'id_user_car_color' => 'цвет',
            'car' => 'авто',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }

    /**
     * Gets query for [[UserCarColor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserCarColor()
    {
        return $this->hasOne(UserCarColor::class, ['id' => 'id_user_car_color']);
    }
}
