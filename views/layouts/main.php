<?php
/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<?php
$items = [
    ['label' => 'Главная', 'url' => ['/site/index']],
    ['label' => 'О нас', 'url' => ['/site/about']],
    ['label' => 'Контакты', 'url' => ['/site/contact']],
];
if (Yii::$app->user->isGuest) {
    $items[] = ['label' => 'Авторизация', 'url' => ['/site/login']];
    $items[] = ['label' => 'Регистрация', 'url' => ['/site/registration']];
} else {
    $items[] = '<li class = "nav-item">'
        . HTml::beginForm(['/site/logout'])
        . Html::submitButton(
            'Выход(' . Yii::$app->user->identity->email . ')',
            ['class' => 'nav-link btn btn-link logout']
        )
        . Html::endForm()
        . '</li>';
}
$nav = Nav::widget([
    'options' => ['class' => 'navbar-nav'],
    'items' => $items
]);
?>

<header class="header" data-header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="">
                <strong><span>ТУры</span></strong>
            </a>

            <div class="d-lg-none">
                <a href="" class="bi-person custom-icon me-3"></a>

                <a href="" class="bi-bag custom-icon"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link active" href="index.html">Home</a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="about.html">Story</a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="products.html">Products</a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="faq.html">FAQs</a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="contact.html">Contact</a>-->
<!--                    </li>-->
                    <?php echo $nav; ?>
                </ul>

                <div class="d-none d-lg-block">
                    <a href="" class="bi-person custom-icon me-3"></a>

                    <a href="" class="bi-bag custom-icon"></a>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--<header class="header" data-header>-->
<!---->
<!--    <div class="overlay" data-overlay></div>-->
<!---->
<!--    <div class="header-top">-->
<!--        <div class="container">-->
<!---->
<!--            <a href="tel:+7(800)555-35-35" class="helpline-box">-->
<!---->
<!--                <div class="icon-box">-->
<!--                    <ion-icon name="call-outline"></ion-icon>-->
<!--                </div>-->
<!---->
<!--                <div class="wrapper">-->
<!--                    <p class="helpline-title">Позвоните нам :</p>-->
<!---->
<!--                    <p class="helpline-number">+7(800)555-35-35</p>-->
<!--                </div>-->
<!---->
<!--            </a>-->
<!---->
<!--            <a href="#" class="logo">-->
<!--                <img src="/css/img/logo.svg" alt="Tourly logo">-->
<!--            </a>-->
<!---->
<!--            <div class="header-btn-group">-->
<!---->
<!---->
<!--                <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>-->
<!--                    <ion-icon name="menu-outline"></ion-icon>-->
<!--                </button>-->
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="header-bottom">-->
<!--        <div class="container">-->
<!---->
<!--            <ul class="social-list">-->
<!---->
<!---->
<!--            </ul>-->
<!---->
<!--            <nav class="navbar" data-navbar>-->
<!---->
<!--                <div class="navbar-top">-->
<!---->
<!--                    <a href="#" class="logo">-->
<!--                        <img src="/css/img/logo-blue.svg" alt="Tourly logo">-->
<!--                    </a>-->
<!---->
<!--                    <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>-->
<!--                        <ion-icon name="close-outline"></ion-icon>-->
<!--                    </button>-->
<!---->
<!--                </div>-->
<!--                --><?php //echo $nav; ?>
<!--                -->
<!---->
<!--            </nav>-->
<!---->
<!--            <button class="btn btn-primary">Купить</button>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</header>-->
<main >
    <article>
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

    </article>
</main>





<footer class="footer">

    <div class="footer-top">
        <div class="container">

            <div class="footer-brand">

                <a href="#" class="logo">
                    <img src="/web/css/img/logo.svg" alt="Tourly logo">
                </a>

                <p class="footer-text">
                    Urna ratione ante harum provident, eleifend, vulputate molestiae proin fringilla, praesentium magna
                    conubia
                    at
                    perferendis, pretium, aenean aut ultrices.
                </p>

            </div>

            <div class="footer-contact">

                <h4 class="contact-title">Contact Us</h4>

                <p class="contact-text">
                    Feel free to contact and reach us !!
                </p>

                <ul>

                    <li class="contact-item">
                        <ion-icon name="call-outline"></ion-icon>

                        <a href="tel:+01123456790" class="contact-link">+01 (123) 4567 90</a>
                    </li>

                    <li class="contact-item">
                        <ion-icon name="mail-outline"></ion-icon>

                        <a href="mailto:info.tourly.com" class="contact-link">info.tourly.com</a>
                    </li>

                    <li class="contact-item">
                        <ion-icon name="location-outline"></ion-icon>

                        <address>3146 Koontz, California</address>
                    </li>

                </ul>

            </div>

            <div class="footer-form">

                <p class="form-text">
                    Подпишитесь на нашу рассылку для получения дополнительных обновлений и новостей!!
                </p>

                <form action="" class="form-wrapper">
                    <input type="email" name="email" class="input-field" placeholder="Enter Your Email" required>

                    <button type="submit" class="btn btn-secondary">Subscribe</button>
                </form>

            </div>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">

            <p class="copyright">
                &copy; 2024 <a href="">Все права защищены</a>. или нет
            </p>


        </div>
    </div>

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
