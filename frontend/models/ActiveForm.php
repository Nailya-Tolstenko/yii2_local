<?php

namespace frontend\models;

use yii\db\model;

class ActiveForm extends Model {

    public static function tableName() {
        return 'post';
    }


    public function attributeLabels() {
        return [            
            'email' =>'E-mail',
            'name' =>'Имя',
            'surname' => 'фамилия',
            'age' => 'возраст',
            'about' => 'обо мне',
            'surname' => 'фамилия',
            'country' => 'город',
            'avatar' => 'фото',
        ];
    }

}