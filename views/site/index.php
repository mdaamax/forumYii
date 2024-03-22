<?php

/** @var yii\web\View $this */

use yii\bootstrap4\Html;

$this->title = 'My Yii Application';
?>

        <section class="hero" id="home">
            <div class="container">

                <h2 class="h1 hero-title">Места для вдохновения</h2>

                <p class="hero-text">
                    Подборки путешествий для вашего wish-листа
                </p>

                <div class="btn-group">
                    <button class="btn btn-primary">Learn more</button>

                    <button class="btn btn-secondary">Book now</button>
                </div>

            </div>
        </section>



        <section class="popular" id="destination">
            <div class="container">

                <p class="section-subtitle">Uncover place</p>

                <h2 class="h2 section-title">СТРАНЫ</h2>

                <p class="section-text">
                    Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque
                    laudantium.
                    Sit ornare
                    mollitia tenetur, aptent.
                </p>

                <ul class="popular-list">

                    <li>
                        <div class="popular-card">

                            <figure class="card-img">
                                <?= Html::img('@web/css/img/popular-1.jpg') ?>
                            </figure>

                            <div class="card-content">


                                <p class="card-subtitle">
                                    <a href="#" >Италия</a>
                                </p>

                                <h3 class="h3 card-title open-popup">
                                    <a href="#" >Город</a>
                                </h3>
                                <div class="popup__bg">
                                    <form class="popup">
                                        <svg class="close-popup" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#2982ff" d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
                                        <label>
                                            <p> Текст-рыба
                                                Значимость этих проблем настолько очевидна, что новая модель
                                                организационной деятельности позволяет оценить значение модели развития.
                                                Значимость этих проблем настолько очевидна, что новая модель организационной деятельности играет
                                                важную роль в формировании направлений прогрессивного развития. Разнообразный и богатый опыт постоянное
                                                информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение позиций, занимаемых
                                                участниками в отношении поставленных задач.
                                        </label>

                                    </form>
                                </div>

                                <p class="card-text">
                                    италия круто
                                </p>

                            </div>


                        </div>
                    </li>

                    <li>
                        <div class="popular-card">

                            <figure class="card-img">
                                <?= Html::img('@web/css/img/popular-2.jpg') ?>
                            </figure>

                            <div class="card-content">


                                <p class="card-subtitle">
                                    <a href="#">Дабай</a>
                                </p>

                                <h3 class="h3 card-title">
                                    <a href="#">Burj khalifa</a>
                                </h3>

                                <p class="card-text">
                                    Fusce hic augue velit wisi ips quibusdam pariatur, iusto.
                                </p>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="popular-card">

                            <figure class="card-img">
                                <?= Html::img('@web/css/img/popular-3.jpg') ?>
                            </figure>

                            <div class="card-content">


                                <p class="card-subtitle">
                                    <a href="#">Japan</a>
                                </p>

                                <h3 class="h3 card-title">
                                    <a href="#">Kyoto temple</a>
                                </h3>

                                <p class="card-text">
                                    Fusce hic augue velit wisi ips quibusdam pariatur, iusto.
                                </p>

                            </div>

                        </div>
                    </li>

                </ul>

                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary">Наши туры</button>
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
                    Это настоящий круиз на парусной яхте с максимально разнообразной программой:
                    яхтинг и чил, трекинг, катание на сапах, много игрушек на борту (гамаки, квадрокоптер и прочее)
                </p>

                <ul class="package-list">
                    <li>
                        <div class="package-card">

                            <figure class="card-banner">
                                <?= Html::img('@web/css/img/packege-1.jpg') ?>
                            </figure>

                            <div class="card-content">

                                <h3 class="h3 card-title">Летний отдых на реке Оксолотан</h3>

                                <p class="card-text">
                                    Это настоящий круиз на парусной яхте с максимально разнообразной программой:
                                    яхтинг и чил, трекинг, катание на сапах, много игрушек на борту (гамаки, квадрокоптер и прочее)
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

                                            <p class="text">человек: 10</p>
                                        </div>
                                    </li>

                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="location"></ion-icon>

                                            <p class="text">Малайзия</p>
                                        </div>
                                    </li>

                                </ul>

                            </div>

                            <div class="card-price">



                                <p class="price">
                                    7150 ₽
                                    <span>/ на человека</span>
                                </p>

                                <button class="btn btn-secondary">Купить</button>

                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="package-card">

                            <figure class="card-banner">
                                <?= Html::img('@web/css/img/packege-2.jpg') ?>
                            </figure>

                            <div class="card-content">

                                <h3 class="h3 card-title">Летний отдых на реке Оксолотан</h3>

                                <p class="card-text">
                                    Это настоящий круиз на парусной яхте с максимально разнообразной программой:
                                    яхтинг и чил, трекинг, катание на сапах, много игрушек на борту (гамаки, квадрокоптер и прочее)
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

                                            <p class="text">людей: 10</p>
                                        </div>
                                    </li>

                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="location"></ion-icon>

                                            <p class="text">Малайзия</p>
                                        </div>
                                    </li>

                                </ul>

                            </div>

                            <div class="card-price">



                                <p class="price">
                                    7150 ₽
                                    <span>/ на человека</span>
                                </p>

                                <button class="btn btn-secondary">Купить</button>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="package-card">

                            <figure class="card-banner">
                                <!--                                <img src="/web/css/img/packege-3.jpg" alt="Santorini Island's Weekend Vacation"-->
                                <!--                                     loading="lazy">-->
                                <?= Html::img('@web/css/img/packege-3.jpg') ?>
                            </figure>

                            <div class="card-content">

                                <h3 class="h3 card-title">Летний отдых на реке Оксолотан</h3>

                                <p class="card-text">
                                    Это настоящий круиз на парусной яхте с максимально разнообразной программой:
                                    яхтинг и чил, трекинг, катание на сапах, много игрушек на борту (гамаки, квадрокоптер и прочее)
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

                                            <p class="text">человек: 10</p>
                                        </div>
                                    </li>

                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="location"></ion-icon>

                                            <p class="text">Малайзия</p>
                                        </div>
                                    </li>

                                </ul>

                            </div>

                            <div class="card-price">



                                <p class="price">
                                    7150 ₽
                                    <span>/ на человека</span>
                                </p>

                                <button class="btn btn-secondary">Купить</button>

                            </div>

                        </div>
                    </li>

                </ul>

                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary">Все подборки</button>
                </div>

            </div>
        </section>








        <section class="popular" id="destination">
            <div class="container">

                <p class="section-subtitle">Uncover place</p>

                <h2 class="h2 section-title">ОТЕли</h2>

                <p class="section-text">
                    Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque
                    laudantium.
                    Sit ornare
                    mollitia tenetur, aptent.
                </p>

                <ul class="popular-list">

                    <li>
                        <div class="popular-card">

                            <figure class="card-img">
                                <img src="/web/css/img/popular-1.jpg" alt="San miguel, italy" loading="lazy">
                            </figure>

                            <div class="card-content">


                                <p class="card-subtitle">
                                    <a href="#">Италия</a>
                                </p>

                                <h3 class="h3 card-title">
                                    <a href="#">Город</a>
                                </h3>

                                <p class="card-text">
                                    италия круто
                                </p>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="popular-card">

                            <figure class="card-img">
                                <img src="/web/css/img/popular-2.jpg" alt="Burj khalifa, dubai" loading="lazy">
                            </figure>

                            <div class="card-content">


                                <p class="card-subtitle">
                                    <a href="#">Дабай</a>
                                </p>

                                <h3 class="h3 card-title">
                                    <a href="#">Burj khalifa</a>
                                </h3>

                                <p class="card-text">
                                    Fusce hic augue velit wisi ips quibusdam pariatur, iusto.
                                </p>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="popular-card">

                            <figure class="card-img">
                                <img src="/web/css/img/popular-3.jpg" alt="Kyoto temple, japan" loading="lazy">
                            </figure>

                            <div class="card-content">


                                <p class="card-subtitle">
                                    <a href="#">Japan</a>
                                </p>

                                <h3 class="h3 card-title">
                                    <a href="#">Kyoto temple</a>
                                </h3>

                                <p class="card-text">
                                    Fusce hic augue velit wisi ips quibusdam pariatur, iusto.
                                </p>

                            </div>

                        </div>
                    </li>

                </ul>

                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary open-popup">Наши туры</button>
                </div>
                <div class="popup__bg">
                    <form class="popup">
                        <svg class="close-popup" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#2982ff" d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
                        <label>
                            <p> Текст-рыба
                                Значимость этих проблем настолько очевидна, что новая модель
                                организационной деятельности позволяет оценить значение модели развития.
                                Значимость этих проблем настолько очевидна, что новая модель организационной деятельности играет
                                важную роль в формировании направлений прогрессивного развития. Разнообразный и богатый опыт постоянное
                                информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение позиций, занимаемых
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

