<?php 

use yii\widgets\ActiveForm;
use yii\helpers\html;
?>


<h1>Show Active</h1>


$model_1 = new Active;

<? $form = ActiveForm::begin([options => ['enctype' => 'multipart/form-data', 'name' => 'formname', 'class' => 'someclass'], 'id' => 'edit-form']); ?>

<? $form->field($model_1, 'email')->textInput(['value' => $userinfo->email]) ?>
<? $form->field($model_1, 'name')->textInput(['value' => $userinfo->name]) ?>
<? $form->field($model_1, 'surname')->textInput(['value' => $userinfo->surname]) ?>
<? $form->field($model_1, 'age')->textInput(['value' => $userinfo->age]) ?>
<? $form->field($model_1, 'about')->textInput(['value' => $userinfo->about]) ?>
<? $form->field($model_1, 'country')->textInput(['value' => $userinfo->country]) ?>
<? $form->field($model_1, 'avatar')->fileInput() ?>

<div class="form-group">'
<?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
