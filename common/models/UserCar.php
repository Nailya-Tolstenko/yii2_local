<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_car".
 *
 * @property int $id id
 * @property int $id_user пользователь
 * @property string $car авто
 * @property string $color цвет
 *
 * @property User $user
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
            [['id_user', 'car', 'color'], 'required'],
            [['id_user'], 'integer'],
            [['car'], 'string', 'max' => 50],
            [['color'], 'string', 'max' => 6],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
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
            'car' => 'авто',
            'color' => 'цвет',
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
}
