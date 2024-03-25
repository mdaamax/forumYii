<?php

use yii\bootstrap4\Html;

?>

<section class="popular" id="destination">
    <div class="container">


        <h2 class="h2 section-title">СТРАНЫ</h2>

        <p class="section-text">
            Мы тщательно следим за открытием границ и подбираем проверенные варианты
        </p>

        <ul class="popular-list">
            <?php foreach ($country as $one_country): ?>
                <li>
                    <div class="popular-card">

                        <figure class="card-img">
                            <?= Html::img("/tours/image?path=country-{$one_country->id}-main") ?>
                        </figure>

                        <div class="card-content">


                            <h3 class="h3 card-title">
                                <a href="/tours/country-hotels?country_id=<?=$one_country->id?>"><?= $one_country->name ?></a>
                            </h3>
                            <p class="card-text open-popup" data-open="country<?=$one_country->id?>">
                                <a href="#">Подробнее</a>
                            </p>

                            <div id="country<?=$one_country->id?>" class="popup__bg">
                                <form class="popup">
                                    <svg class="close-popup" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24">
                                        <path fill="#2982ff"
                                              d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/>
                                    </svg>
                                    <label>
                                        <p><?= $one_country->description ?><?= $one_country->id ?></p>
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
