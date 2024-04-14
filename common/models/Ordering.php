<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ordering".
 *
 * @property int $id id
 * @property int $cost стоимость
 * @property string $created_at дата создания
 * @property int $id_user пользователь
 *
 * @property OrderingProduct[] $orderingProducts
 * @property Product[] $products
 * @property User $user
 */
class Ordering extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ordering';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cost', 'created_at', 'id_user'], 'required'],
            [['cost', 'id_user'], 'integer'],
            [['created_at'], 'string', 'max' => 10],
            [['created_at'], 'unique'],
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
            'cost' => 'стоимость',
            'created_at' => 'дата создания',
            'id_user' => 'пользователь',
        ];
    }

    /**
     * Gets query for [[OrderingProducts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderingProducts()
    {
        return $this->hasMany(OrderingProduct::class, ['id_ordering' => 'id']);
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::class, ['id' => 'id_product'])->viaTable('ordering_product', ['id_ordering' => 'id']);
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
