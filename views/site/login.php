<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

//var_dump(password_hash('admin',PASSWORD_DEFAULT));
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>
    <div class="wrapper fadeInDown">
        <div id="formContent">

            <h2 class="active"> Авторизация </h2>



            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
            ]); ?>

            <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder'=> 'password']) ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <div class="offset-lg-1 col-lg-11">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>
            <button type="submit" class="btn custom-btn form-control mt-4 mb-3">
                Sign in
            </button>

            <?php ActiveForm::end(); ?>
            <div id="formFooter">
                <a class="underlineHover" href="register_form.php">Регистрация</a>
            </div>

        </div>
    </div>



</div>



<section class="sign-in-form section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 mx-auto col-12">

                <h1 class="hero-title text-center mb-5">Sign In</h1>

                <div class="row">
                    <div class="col-lg-8 col-11 mx-auto">
                        <form role="form" method="post">

<!--                            <div class="form-floating mb-4 p-0">-->
<!--                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>-->
<!---->
<!--                                <label for="email">Email address</label>-->
<!--                            </div>-->
<!---->
<!--                            <div class="form-floating p-0">-->
<!--                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>-->
<!---->
<!--                                <label for="password">Password</label>-->
<!--                            </div>-->
                            <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'password')->passwordInput(['placeholder'=> 'password']) ?>

                            <?= $form->field($model, 'rememberMe')->checkbox([
                                'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                            ]) ?>

                            <button type="submit" class="btn custom-btn form-control mt-4 mb-3">
                                Sign in
                            </button>

                            <p class="text-center">Don’t have an account? <a href="sign-up.html">Create One</a></p>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
</body>
</html>