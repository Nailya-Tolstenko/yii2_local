<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id id
 * @property string $name название
 * @property int $price цена
 *
 * @property OrderingProduct[] $orderingProducts
 * @property Ordering[] $orderings
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['price'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name' => 'название',
            'price' => 'цена',
        ];
    }

    /**
     * Gets query for [[OrderingProducts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderingProducts()
    {
        return $this->hasMany(OrderingProduct::class, ['id_product' => 'id']);
    }

    /**
     * Gets query for [[Orderings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderings()
    {
        return $this->hasMany(Ordering::class, ['id' => 'id_ordering'])->viaTable('ordering_product', ['id_product' => 'id']);
    }
}
