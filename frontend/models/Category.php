<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord {

    public static function tableName() {
        return 'category';
    }

    //связываем модель продуктов с моделью категорий

    public function getProduct() {
        return $this->hasMany(Product::className(), ['parant' => 'id']);
}

}