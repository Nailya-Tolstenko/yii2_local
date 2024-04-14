<?php

use common\models\UserCarColor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\UserCarColorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'User Car Colors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-car-color-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User Car Color', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'color',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UserCarColor $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
