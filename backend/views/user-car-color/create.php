<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\UserCarColor $model */

$this->title = 'Create User Car Color';
$this->params['breadcrumbs'][] = ['label' => 'User Car Colors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-car-color-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
