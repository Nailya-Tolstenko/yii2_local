<?php

use common\models\OrderingProduct;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\OrderingProductSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ordering Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordering-product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ordering Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_ordering',
            'id_product',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, OrderingProduct $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
