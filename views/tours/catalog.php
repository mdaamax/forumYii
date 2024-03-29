<?php
?>

<section class="package" id="package">
    <div class="container">

        <p class="section-subtitle">Популярные подборки</p>

        <h2 class="h2 section-title">ТУРЫ</h2>
        <?php if (Yii::$app->user->can('admin')): ?>
            <a href="/tours/create-tour">Добавить тур</a>
        <?php endif; ?>
        <p class="section-text">
            Продуманная спонтанность.
            Маршруты могут адаптироваться под пожелания группы
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
                                <?= $tour->short_description ?>
                            </p>

                            <ul class="card-meta-list">

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

                            <p class="price">
                                <?= $tour->price ?>₽
                                <span>/ на человека</span>
                            </p>

                            <a href="/tour/<?=$tour->id?>" class="btn btn-secondary">Подробнее</a>

                        </div>

                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>
</section>
