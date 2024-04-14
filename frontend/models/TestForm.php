<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class TestForm extends ActiveRecord {

    public static function tableName() {
        return 'post';
    }

    public function attributeLabels() {
        return [
            'name' =>'Имя',
            'email' =>'E-mail',
            'text' =>'Текст сообщения',
        ];
    }

    public function rules() {
        return [
            [ ['name', 'text'], 'required', 'message' => 'Поле обязательно для заполнения'],
            [ 'email', 'email'],
//            [ 'name', 'string', 'min' => 2, 'tooShort' => 'Мало'],
//            [ 'name', 'string', 'max' => 5, 'tooLong' => 'Много'],
            ['name', 'string', 'length' => [2,5], ],
            ['name', 'myRule'],
            ['text', 'trim'],
        ];
    }

    public function myRule($attr) {
        if (in_array($this->attr, ['hello', 'world']) ) {
            $this->addError($attr, 'Wrong!');
        }
    }

}