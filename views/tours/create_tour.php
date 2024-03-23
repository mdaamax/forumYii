<?php

use yii\helpers\Html;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CreateTourForm $model */
/** @var ActiveForm $form */
/** @var  $hotels */
?>
<br>
<br>
<br>

<div class="tours-create_tour container" style="margin-top: 10vh">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'price') ?>
        <?= $form->field($model, 'human_count') ?>
        <?= $form->field($model, 'title') ?>
        <?= $form->field($model, 'short_description') ?>
        <?= $form->field($model, 'hotel_id')->dropDownList($hotels) ?>
        <?= $form->field($model, 'main_img')->fileInput(['accept' => 'image/*','value'=>UploadedFile::getInstance($model, 'main_img')]) ?>
        <?= $form->field($model, 'slider_images[]')->fileInput(['multiple' => true, 'accept' => 'image/*','value'=>UploadedFile::getInstance($model, 'slider_images')]) ?>
        <?= $form->field($model, 'description')->textarea() ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- tours-create_tour -->
