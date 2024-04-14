<?php

/** @var yii\web\View $this */

$this->title = 'My Order';
?>

<div class="ordering-index">


    <div class="body-content">

        <div class="row">

        <?php foreach ($orderingList as $order): ?>

            <div class="col-lg-4">
                <h2>Заказ #<?=$order->id;?> </h2>

                <p>Created_at: <?=$order->created_at;?></p>

                <p><a class="btn btn-outline-secondary" href="#">Посмотреть подробно</a></p>
            </div>
        
        <?php endforeach; ?>

        </div>

    </div>
</div>
