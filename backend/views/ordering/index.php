<?php

use common\models\Ordering;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\OrderingSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Orderings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordering-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ordering', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cost',
            'created_at',
            'id_user',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ordering $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
