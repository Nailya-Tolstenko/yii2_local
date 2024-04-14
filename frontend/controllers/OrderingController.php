<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Ordering;
use common\models\Product;
use common\models\OrderingProduct;


/**
 * Ordering controller
 */
class OrderingController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [

            'access' => [
                'class' => AccessControl::class,
                'only' => ['index', 'product'],
                'rules' => [
                    [
                        'actions' => ['index', 'product'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => [],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionIndex() {

        $mOrdering = new Ordering();
        $orderingList = $mOrdering::find()->all();
        $orderingOne = $mOrdering::find()->one();

        


        return $this->render('index', [ 
            'orderingList' => $orderingList,
            'orderingOne' => $orderingOne,
        ]);

    }

}
