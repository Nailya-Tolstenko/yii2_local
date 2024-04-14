<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\OrderingProduct $model */

$this->title = 'Create Ordering Product';
$this->params['breadcrumbs'][] = ['label' => 'Ordering Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordering-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
