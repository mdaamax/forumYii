<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CreateHotelForm $model */
/** @var ActiveForm $form */
?>
<div class="tours-create_hotel container" style="margin-top: 16vh">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'country_id')->dropDownList($countries) ?>
        <?= $form->field($model, 'price') ?>
        <?= $form->field($model, 'main_img')-> fileInput(['value'=>\yii\web\UploadedFile::getInstance($model,'main_img')]) ?>
        <?= $form->field($model, 'rating') ?>
        <?= $form->field($model, 'description') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Создать', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- tours-create_hotel -->
