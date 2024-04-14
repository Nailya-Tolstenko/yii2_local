<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;

use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Ordering;
use common\models\Product;
use common\models\OrderingProduct;


class MyController extends AppController {

    public function actionIndex($id = null) {
        $hi = 'Hello, World';
        $names =['Ivanov', 'Petrov', 'Sidorov'];

        if(!$id) $id = 'test';
      //  return  $this-> render ('index', ['hello' => $hi, 'names' => $names]);
      return $this->render('index', compact('hi', 'names', 'id'));
    }
}