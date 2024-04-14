<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ordering_product".
 *
 * @property int $id
 * @property int $id_ordering
 * @property int $id_product
 *
 * @property Ordering $ordering
 * @property Product $product
 */
class OrderingProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ordering_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ordering', 'id_product'], 'required'],
            [['id_ordering', 'id_product'], 'integer'],
            [['id_ordering', 'id_product'], 'unique', 'targetAttribute' => ['id_ordering', 'id_product']],
            [['id_ordering'], 'exist', 'skipOnError' => true, 'targetClass' => Ordering::class, 'targetAttribute' => ['id_ordering' => 'id']],
            [['id_product'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['id_product' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_ordering' => 'Id Ordering',
            'id_product' => 'Id Product',
        ];
    }

    /**
     * Gets query for [[Ordering]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrdering()
    {
        return $this->hasOne(Ordering::class, ['id' => 'id_ordering']);
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'id_product']);
    }
}
