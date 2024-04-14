<?php
//$this->title = 'одна статья';

use frontend\controllers\Components\MyWidget;
?>


<h1>Show Action</h1>

<?php //echo MyWidget::widget(['name' => 'Вася']); ?>

<?php MyWidget::begin()?>
    <h1> Hello World! </h1>
<?php MyWidget::end()?>

<?php //debug($cats) ?>
<?php // echo count($cats->product) ?> //отложенная, ленивая загрузка
<?php //debug($cats) ?>

foreach ($cats as $cat) {
    echo '<ul>';
        echo '<li>' . $cat->title . '</li>';
        $products = $cat->product_1;
        foreach ($product_1 as $product) {
            echo '<ul>';
                echo '<li>' . $product->title . '</li>';
                echo '</ul>';
        }
 
        echo '<ul>';
}

<button class="btn btn-success" id="btn">Click me... </button>

<?php //$this->registerJsFile('@web/js/scripts.js', 
//['depends' => 'yii\web\YiiAsset']) ?>

<?php //$this->registerJs("$('.container').append('<p>SHOW!!!</p>');") ?>

<?php //$this->registerCss('.container{background: #ccc;}') ?>

<?php

$js = <<<JS
    $('#btn').on('click', function() {
        $.ajax({
            url: 'index.php?r=post/index',
            data: {test: '123'},
            type: 'POST',
            success: function(res) {
                console.log(res);
            },
            error: function() {
                alert('Error!');
            }
        });
    });
JS;


$this->registerJs($js);

?>
