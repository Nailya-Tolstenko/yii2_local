<?php 

use yii\widgets\ActiveForm;
use yii\helpers\html;
?>

<?php
//debug($model);
?>


<?php if(Yii::$app->session->hasFlash('success') ); ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<?php echo Yii::$app->session->getFlash ('success'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


<?php if(Yii::$app->session->hasFlash('error') ); ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<?php echo Yii::$app->session->getFlash ('error'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>



<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']]) ?>
<?= $form->field($model, 'name')->label('Имя')?>
<?= $form->field($model, 'email')->input('email')?>
<?= $form->field($model, 'text')->label('Текст сообщения')->textarea(['row' => 10])?>
<?=Html::submitButton('Отправить', ['class' => 'btn btn-succes'])?>
<?php ActiveForm::end() ?>
