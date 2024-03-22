<?php
var_dump($tours);
?>

<section class="package" id="package">
    <div class="container">

        <p class="section-subtitle">Популярные подборки</p>

        <h2 class="h2 section-title">ТУРЫ</h2>

        <p class="section-text">
            Это настоящий круиз на парусной яхте с максимально разнообразной программой:
            яхтинг и чил, трекинг, катание на сапах, много игрушек на борту (гамаки, квадрокоптер и прочее)
        </p>

        <ul class="package-list">
            <?php foreach ($tours as $tour): ?>
                <li>
                    <div class="package-card">

                        <figure class="card-banner">
                            <img src="/tours/image?path=tours-<?=$tour->id?>-main" alt="Experience The Great Holiday On Beach"
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
                </li>
            <?php endforeach; ?>
        </ul>

        <button class="btn btn-primary">Все подборки</button>

    </div>
</section>
