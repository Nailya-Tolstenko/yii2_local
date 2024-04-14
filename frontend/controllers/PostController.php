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
use frontend\models\TestForm;

use common\models\Category;

use common\models\ActiveForm;

class PostController extends AppController {

    public $layout = 'main';

    public function actionIndex() {
        if( Yii::$app->request->isAjax ) {

           debug (Yii::$app->request->post());
            return 'test';
        }


        //объект нашей модели
        $model = new TestForm();
       
 
         function actionActive() {

        }

        //$model_1 = new ActiveForm();

       // $this->view->title = 'Все статьи';
       // return $this->render('active',compact('model_1'));



      //   $model->name = 'Автор';
      //   $model->email = 'mail@test.com';
      //   $model->text= 'текст сообщение';
      //   $model->save();




           if( $model->load(Yii::$app->request->post()) ) {
           if( $model->save() ) {
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
             } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
         }

     }

        $this->view->title = 'Все статьи';
     return $this->render('index',compact('model'));

    }

    public function actionShow() {

       $this->view->title = 'Одна статья!';
       $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...']);
       $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы...']);

      // $cats = Category::find()->all(); //отложенная загрузка
      $cats = Category::find()->with('products_1')->all();  // жадная загрузка


       //$cats = Category::find()->all();
//      $cats = Category::find()->orderBy(['id' => 'SORT_DESC'])->all(); запросы на выборку данных. Сортировка.
//      $cats = Category::find()->asArray()->all(); Вывод данных массивом
//      $cats = Category::find()->asArray()->where('parent=691')->all(); Фильтрует данные Where создает условия при которых конкретные данные будут вытащины.
//      $cats = Category::find()->asArray()->where(['parent' =>691])->all();
//      $cats = Category::find()->asArray()->where(['like', 'title','pp'])->all(); оператор, поле, значение.
//      $cats = Category::find()->asArray()->where(['<=', 'id',695])->all(); 
//      $cats = Category::find()->asArray()->where('parent=691')->limit(2)->all(); ограниченное кол-во записей
//      $cats = Category::find()->asArray()->where('parent=691')->limit(1)->one();
//      $cats = Category::find()->asArray()->where('parent=691')->count(); позволяет посчитать кол-во записей
//      $cats = Category::findOne(['parent' => 691]);
//      $cats = Category::findAll(['parent' => 691]);

//      $query = "SELECT * FROM categories WHERE title LIKE '%pp%'";
//      $query = "SELECT * FROM categories WHERE title LIKE :search";
//      $cats = Category::findBYSql($query, [':search' => '%pp%'])->all();

         //$cats = Category::findOne(694);

      return $this->render('show', compact('cats'));
    } 

}