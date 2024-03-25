<?php
/** @var $model */
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
/** @var app\models\LoginForm $model */
?>



<section class="sign-in-form section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 mx-auto col-12">

                <h1 class="hero-title text-center mb-5">Регистрация</h1>

                <div class="row">
                    <div class="col-lg-8 col-11 mx-auto">
                        <?php $form = ActiveForm::begin([
                            'id' => 'registration-form',
                        ]); ?>
                        <div class="form-floating mb-4 p-0">
                            <?= $form->field($model, 'email')->textInput(['autofocus' => true])-> label('Email address') ?>

                        </div>
                        <div class="form-floating mb-4 p-0">
                            <?= $form->field($model, 'firstname')->textInput(['autofocus' => true])-> label('Имя') ?>

                        </div>
                        <div class="form-floating mb-4 p-0">
                            <?= $form->field($model, 'lastname')->textInput(['autofocus' => true])-> label('Фамилия') ?>

                        </div>
                        <div class="form-floating mb-4 p-0">
                            <?= $form->field($model, 'patronymic')->textInput(['autofocus' => true])-> label('Отечество') ?>

                        </div>

                        <div class="form-floating p-0">
                            <?= $form->field($model, 'password')->passwordInput(['placeholder'=> 'password'])-> label('Password') ?>

                        </div>
                        <div class="form-floating p-0">
                            <?= $form->field($model, 'passwordRepeat')->passwordInput(['placeholder'=> 'password'])-> label('PasswordRepeat') ?>

                        </div>


                        <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn custom-btn w-100 mt-4 mb-3', 'name' => 'login-button']) ?>
                        <?php ActiveForm::end(); ?>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>