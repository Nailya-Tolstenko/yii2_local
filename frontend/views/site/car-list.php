<?php

// use yii\helpers\Html;
use yii\widgets\DetailView;

?>


    <?= DetailView::widget([
        'model' => $userCarList,
        'attributes' => [
            'id',

            [
                'attribute' => 'car',
                'label' => $mUserCar->getAttributeLabel( 'car' ),
                'format' => 'raw',
                'value' => function($model) {
                    return $model[0]->car;
                },
            ],

            [
                'attribute' => 'id_user_car_color',
                'label' => $mUserCar->getAttributeLabel( 'id_user_car_color' ),
                'format' => 'raw',
                'value' => function($model) use($mUserCarColor) {
                    return $mUserCarColor::findOne($model[0]->id_user_car_color)->color;
                },
            ],

        ],
    ]);

    ?>