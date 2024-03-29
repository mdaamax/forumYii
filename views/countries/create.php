<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\entity\DirCountries $model */
/** @var $model_file */

$this->title = 'Создание страны';
$this->params['breadcrumbs'][] = ['label' => 'Dir Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir-countries-create container" style="margin-top: 10vh">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model_file' => $model_file,
        'isEdit'=>false
    ]) ?>

</div>
