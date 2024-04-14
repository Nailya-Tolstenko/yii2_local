<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\UserCarColor $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-car-color-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
