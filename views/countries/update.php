<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\entity\DirCountries $model */

$this->title = 'Update Dir Countries: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dir Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dir-countries-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>