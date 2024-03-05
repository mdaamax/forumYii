<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\entity\Subsections $model */

$this->title = 'Create Subsections';
$this->params['breadcrumbs'][] = ['label' => 'Subsections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subsections-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
