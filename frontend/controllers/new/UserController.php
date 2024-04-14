<?php

namespace frontend\controllers\new;


use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;

use yii\we\Controllers\AppController;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Ordering;
use common\models\Product;
use common\models\OrderingProduct;

class UserController extends AppController {

    public function actionIndex() {
        return $this->render ('index');
    }
}