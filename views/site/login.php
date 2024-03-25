<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

//var_dump(password_hash('admin',PASSWORD_DEFAULT));
$this->title = 'Login';
\app\assets\AppAsset::register($this);
?>




<section class="sign-in-form section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 mx-auto col-12">

                <h1 class="hero-title text-center mb-5">Авторизация</h1>

                <div class="row">
                    <div class="col-lg-8 col-11 mx-auto">
                            <?php $form = ActiveForm::begin([
                                'id' => 'login-form',
                            ]); ?>
                            <div class="form-floating mb-4 p-0">
<!--                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>-->
                                <?= $form->field($model, 'email')->textInput(['autofocus' => true])-> label('Email address') ?>

<!--                                <label for="email">Email address</label>-->
                            </div>

                            <div class="form-floating p-0">
<!--                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>-->
                                <?= $form->field($model, 'password')->passwordInput(['placeholder'=> 'password'])-> label('Password') ?>

<!--                                <label for="password">Password</label>-->
                            </div>




<!--                            <button type="submit" class="btn custom-btn form-control mt-4 mb-3">-->
<!--                                Sign in-->
<!--                            </button>-->
                                <?= Html::submitButton('ВХОД', ['class' => 'btn custom-btn w-100 mt-4 mb-3', 'name' => 'login-button']) ?>
                            <?= $form->field($model, 'rememberMe')->checkbox([
                                'template' => "<div class=\"offset-lg-1  custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                            ]) ?>
                            <p class="text-center">У вас нет учетной записи? <a href="/site/registration">Создать аккаунт</a></p>
                        <a href="/site/index"><small>на главную</small></a></p>
                            <?php ActiveForm::end(); ?>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
