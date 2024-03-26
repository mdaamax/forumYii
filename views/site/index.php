<?php
/** @var yii\web\View $this */

use yii\bootstrap4\Html;

$this->title = 'Valim';
?>

<section class="hero" id="home">
    <div class="container">

        <h2 class="h1 hero-title">Места для вдохновения</h2>

        <p class="hero-text">
            Подборки путешествий для вашего wish-листа
        </p>

        <div class="btn-group">
            <a href="/tours/country" class="btn btn-primary" style="font-size: 16px"><strong>Страны</strong></a>
            <a href="/tours/catalog" class="btn btn-secondary" style="font-size: 16px"><strong>Туры</strong></a>
        </div>

    </div>
</section>


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
<!--                                        --><?//= $one_country->id ?>
                                        <p><?= $one_country->description ?></p>
                                    </label>

                                </form>
                            </div>

                        </div>


                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="row justify-content-center">
            <a href="/tours/country" class="btn btn-primary">Страны Партнеры</a>
        </div>

    </div>
</section>


<!--
- #PACKAGE
-->

<section class="package" id="package">
    <div class="container">

        <p class="section-subtitle">Популярные подборки</p>

        <h2 class="h2 section-title">ТУРЫ</h2>

        <p class="section-text">
            Небольшие группы.
            Особенная атмосфера в компании единомышленников
        </p>

        <ul class="package-list">
            <?php foreach ($tours as $tour): ?>
            <li>
                <div class="package-card">

                    <figure class="card-banner">
                        <?= Html::img("/tours/image?path=tours-{$tour->id}-main") ?>
                    </figure>

                    <div class="card-content">

                        <h3 class="h3 card-title"><?= $tour->title ?></h3>

                        <p class="card-text"><?= $tour->short_description ?></p>

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
                            <?= $tour->price ?> ₽
                            <span>/ на человека</span>
                        </p>
                        <a href="/tour/<?=$tour->id?>" class="btn btn-secondary">Подробнее</a>

                    </div>

                </div>
            </li>
            <?php endforeach; ?>
        </ul>

        <div class="row justify-content-center">
            <a href="/tours/catalog" class="btn btn-primary">Наши туры</a>
        </div>

    </div>
</section>


<section class="popular" id="destination">
    <div class="container">

        <p class="section-subtitle">Популярные подборки</p>

        <h2 class="h2 section-title">ОТЕли</h2>

        <p class="section-text">
            Каждый номер – это идеальный выбор без всяких компромиссов.
            Утонченная эстетика и отделка натуральными материалами, продуманная до мелочей концепция пространства.
        </p>

        <ul class="popular-list">
            <?php foreach ($hotel as $one_hotel): ?>
            <li>
                <div class="popular-card">

                    <figure class="card-img">
                        <?= Html::img("/tours/image?path=hotels-{$one_hotel->id}-main") ?>
                    </figure>

                    <div class="card-content">


                        <p class="card-subtitle">
                            <a href="/tours/country-hotels?country_id=<?=$one_hotel->country->id?>"><?=$one_hotel->country->name?></a>
                        </p>

                        <h3 class="h3 card-title">
                            <a href="/tours/hotel-tours?hotel_id=<?=$one_hotel->id?>"><?=$one_hotel->name?></a>
                        </h3>

                        <p class="card-text">Рейтинг: <?=$one_hotel->rating?>/5</p>

                        <p class="card-text open-popup" data-open="hotel<?=$one_hotel->id?>">
                            <a href="#">Подробнее</a>
                        </p>
                        <div id="hotel<?=$one_hotel->id?>" class="popup__bg">
                            <form class="popup">
                                <svg class="close-popup" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#2982ff"
                                          d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/>
                                </svg>
                                <label>
                                    <p><?=$one_hotel->description?></p>
                                </label>

                            </form>
                        </div>
                    </div>

                </div>
            </li>
            <?php endforeach;?>
        </ul>

        <div class="row justify-content-center">
            <a href="/tours/hotels" class="btn btn-primary">Наши отели</a>
        </div>
        <div class="popup__bg">
            <form class="popup">
                <svg class="close-popup" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#2982ff"
                          d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/>
                </svg>
                <label>
                    <p> Текст-рыба
                        Значимость этих проблем настолько очевидна, что новая модель
                        организационной деятельности позволяет оценить значение модели развития.
                        Значимость этих проблем настолько очевидна, что новая модель организационной деятельности играет
                        важную роль в формировании направлений прогрессивного развития. Разнообразный и богатый опыт
                        постоянное
                        информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение
                        позиций, занимаемых
                        участниками в отношении поставленных задач.
                </label>

            </form>
        </div>


    </div>
</section>


<!--
  - #GALLERY
-->

<section class="gallery" id="gallery">
    <div class="container">

        <p class="section-subtitle">Фото Галлерея</p>

        <h2 class="h2 section-title">Фотографии из путешествий</h2>

        <p class="section-text">
            Ваши фотки
        </p>

        <ul class="gallery-list">

            <li class="gallery-item">
                <figure class="gallery-image">
                    <?= Html::img('@web/css/img/gallery-1.jpg') ?>
                </figure>
            </li>

            <li class="gallery-item">
                <figure class="gallery-image">
                    <!--                            <img src="/web/css/img/gallery-2.jpg" alt="Gallery image">-->
                    <?= Html::img('@web/css/img/gallery-2.jpg') ?>

                </figure>
            </li>

            <li class="gallery-item">
                <figure class="gallery-image">
                    <!--                            <img src="/web/css/img/gallery-3.jpg" alt="Gallery image">-->
                    <?= Html::img('@web/css/img/gallery-3.jpg') ?>

                </figure>
            </li>

            <li class="gallery-item">
                <figure class="gallery-image">
                    <!--                            <img src="/web/css/img/gallery-4.jpg" alt="Gallery image">-->
                    <?= Html::img('@web/css/img/gallery-4.jpg') ?>

                </figure>
            </li>

            <li class="gallery-item">
                <figure class="gallery-image">
                    <!--                            <img src="/web/css/img/gallery-5.jpg" alt="Gallery image">-->
                    <?= Html::img('@web/css/img/gallery-5.jpg') ?>

                </figure>
            </li>

        </ul>

    </div>
</section>


<!--
  - #CTA
-->

<section class="cta" id="contact">
    <div class="container">

        <div class="cta-content">
            <p class="section-subtitle">Call To Action</p>

            <h2 class="h2 section-title">ГОТОВЫ К НЕЗАБЫВАЕМОМУ ПУТЕШЕСТВИЮ. НЕ ЗАБЫВАЙТЕ О НАС</h2>

            <p class="section-text">
                Авторские туры — новый формат насыщенных путешествий
            </p>
        </div>

        <button class="btn btn-secondary">Наши Контакты!</button>

    </div>
</section>

