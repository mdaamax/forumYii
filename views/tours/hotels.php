<?php

use yii\bootstrap4\Html;

?>

<section class="popular" id="destination">
    <div class="container">

        <p class="section-subtitle">Популярные подборки</p>

        <h2 class="h2 section-title">ОТЕли</h2>
        <?php if (Yii::$app->user->can('admin')): ?>
            <a href="/tours/create-hotel">Добавить отель</a>
        <?php endif; ?>
        <p class="section-text">
            Каждый номер – это идеальный выбор без всяких компромиссов. Утонченная эстетика и отделка натуральными материалами,
            продуманная до мелочей концепция пространства.
        </p>

        <ul class="popular-list">
            <?php foreach ($hotels as $one_hotel): ?>
                <li>
                    <div class="popular-card">

                        <figure class="card-img">
                            <?= Html::img("/tours/image?path=hotels-{$one_hotel->id}-main") ?>
                        </figure>

                        <div class="card-content">


                            <p class="card-subtitle">
                                <a href="/tours/country-hotels?country_id=<?= $one_hotel->country->id ?>"><?= $one_hotel->country->name ?></a>
                            </p>

                            <h3 class="h3 card-title">
                                <a href="/tours/hotel-tours?hotel_id=<?= $one_hotel->id ?>"><?= $one_hotel->name ?></a>
                            </h3>

                            <p class="card-text">Рейтинг:<?= $one_hotel->rating ?>/5</p>

                            <p class="card-text open-popup" data-open="hotel<?= $one_hotel->id ?>">
                                <a href="#">Подробнее</a>
                            </p>
                            <div id="hotel<?= $one_hotel->id ?>" class="popup__bg">
                                <form class="popup">
                                    <svg class="close-popup" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24">
                                        <path fill="#2982ff"
                                              d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/>
                                    </svg>
                                    <label>
                                        <p><?= $one_hotel->description ?></p>
                                    </label>

                                </form>
                            </div>
                        </div>

                    </div>
                </li>
            <?php endforeach; ?>
        </ul>


    </div>
</section>

