<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord {

    public static function tableName() {
        return 'product_1';
    }

    public function getProduct() {
        return $this->hasOne(Product::className(), ['id' => 'parant']);

}
}