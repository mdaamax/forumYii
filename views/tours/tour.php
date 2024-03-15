<?php

use yii\bootstrap4\Html;
use yii\widgets\ActiveForm;

var_dump($tour);
?>

<?php $form = ActiveForm::begin([
    'id' => 'login-form',
]); ?>
<?= $form->field($model, 'count')->input('number',['min'=>1,'max'=>$tour->human_count])->label('Email address') ?>
<?= Html::submitButton('Sign in', ['class' => 'btn custom-btn w-100 mt-4 mb-3', 'name' => 'login-button']) ?>
    <div class="package-card">

        <figure class="card-banner">
            <img src="/css/img/packege-1.jpg" alt="Experience The Great Holiday On Beach"
                 loading="lazy">
        </figure>

        <div class="card-content">

            <h3 class="h3 card-title"><?= $tour->title ?></h3>

            <p class="card-text">
                <?= $tour->description ?>
            </p>

            <ul class="card-meta-list">

                <li class="card-meta-item">
                    <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7 дней</p>
                    </div>
                </li>

                <li class="card-meta-item">
                    <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">человек: <?= $tour->human_count ?></p>
                    </div>
                </li>

                <li class="card-meta-item">
                    <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text"><?= $tour->hotel->country->name ?></p>
                    </div>
                </li>

            </ul>

        </div>

        <div class="card-price">

            <div class="wrapper">


            </div>

            <p class="price">
                <?= $tour->price ?>₽
                <span>/ на человека</span>
            </p>

            <a href="/tour/<?=$tour->id?>" class="btn btn-secondary">Купить</a>

        </div>

    </div>
<?php ActiveForm::end(); ?>