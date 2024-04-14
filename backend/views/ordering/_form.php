<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Ordering $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ordering-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
