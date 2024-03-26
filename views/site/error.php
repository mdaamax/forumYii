<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */

/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error" style="margin-top: 100px">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

</div>


<div class="row featurette container" style="margin-top: 115px">
    <div class="col-md-7 order-md-2">
        <h5 class="featurette-heading">
<!--            ohh shit here we go again-->
            <span class="text-muted">Попробуй выбрать другую страничку приятель</span></h5>

    </div>
<!--    <div class="col-md-5 order-md-1">-->
<!--        <img style=" height: 500px;width: 500px" --><?//= Html::img('@web/css/img/мгагаг.jpg') ?>
<!---->
<!--    </div>-->
</div>

<hr class="featurette-divider">