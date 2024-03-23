<?php

use yii\helpers\Html;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\entity\DirCountries $model */
/** @var app\entity\DirCountries $model_file */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dir-countries-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model_file, 'slider_images[]')->fileInput(['multiple' => true, 'accept' => 'image/*','value'=>UploadedFile::getInstances($model_file, 'slider_images')]) ?>
    <?php if($isEdit):?>
    <?= $form->field($model_file, 'updateImg')->checkbox() ?>
    <?php endif; ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
