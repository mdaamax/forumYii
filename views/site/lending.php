<?php

use app\assets\AppAsset;

AppAsset::register($this);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourly - Travel agancy</title>


    <link rel="shortcut icon" href="/css/img/favicon.svg" type="image/svg+xml">

    <!--
css
    -->
    <link rel="stylesheet" href="header.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
            rel="stylesheet">
</head>

<body id="top">

<!--
  - #HEADER
-->

<header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
        <div class="container">

            <a href="tel:+7(800)555-35-35" class="helpline-box">

                <div class="icon-box">
                    <ion-icon name="call-outline"></ion-icon>
                </div>

                <div class="wrapper">
                    <p class="helpline-title">Позвоните нам :</p>

                    <p class="helpline-number">+7(800)555-35-35</p>
                </div>

            </a>

            <a href="#" class="logo">
                <img src="/css/img/logo.svg" alt="Tourly logo">
            </a>

            <div class="header-btn-group">


                <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
                    <ion-icon name="menu-outline"></ion-icon>
                </button>

            </div>

        </div>
    </div>

    <div class="header-bottom">
        <div class="container">

            <ul class="social-list">


            </ul>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">

                    <a href="#" class="logo">
                        <img src="/css/img/logo-blue.svg" alt="Tourly logo">
                    </a>

                    <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="#home" class="navbar-link" data-nav-link>Главная</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link" data-nav-link>О нас</a>
                    </li>

                    <li>
                        <a href="#destination" class="navbar-link" data-nav-link>Популярное</a>
                    </li>

                    <li>
                        <a href="#package" class="navbar-link" data-nav-link>Подборки</a>
                    </li>

                    <li>
                        <a href="#gallery" class="navbar-link" data-nav-link>Галлерея</a>
                    </li>

                    <li>
                        <a href="#contact" class="navbar-link" data-nav-link>Контакты</a>
                    </li>

                </ul>

            </nav>

            <button class="btn btn-primary">Купить</button>

        </div>
    </div>

</header>


<main>
    <article>

        <!--
          - #HERO
        -->

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


        <!--
          - #TOUR SEARCH
        -->




        <!--
          - #POPULAR
        -->

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
                                <img src="/css/img/popular-1.jpg" alt="San miguel, italy" loading="lazy">
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
                                <img src="/css/img/popular-2.jpg" alt="Burj khalifa, dubai" loading="lazy">
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
                                <img src="/css/img/popular-3.jpg" alt="Kyoto temple, japan" loading="lazy">
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

                <button class="btn btn-primary">НАши туры</button>

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
                                <img src="/css/img/packege-1.jpg" alt="Experience The Great Holiday On Beach"
                                     loading="lazy">
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

                                <div class="wrapper">



                                </div>

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
                                <img src="/css/img/packege-2.jpg" alt="Summer Holiday To The Oxolotan River"
                                     loading="lazy">
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
                                <img src="/css/img/packege-3.jpg" alt="Santorini Island's Weekend Vacation"
                                     loading="lazy">
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

                <button class="btn btn-primary">Все подборки</button>

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
                                <img src="/css/img/popular-1.jpg" alt="San miguel, italy" loading="lazy">
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
                                <img src="/css/img/popular-2.jpg" alt="Burj khalifa, dubai" loading="lazy">
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
                                <img src="/css/img/popular-3.jpg" alt="Kyoto temple, japan" loading="lazy">
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

                <button class="btn btn-primary">НАши туры</button>

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
                            <img src="/css/img/gallery-1.jpg" alt="Gallery image">
                        </figure>
                    </li>

                    <li class="gallery-item">
                        <figure class="gallery-image">
                            <img src="/css/img/gallery-2.jpg" alt="Gallery image">
                        </figure>
                    </li>

                    <li class="gallery-item">
                        <figure class="gallery-image">
                            <img src="/css/img/gallery-3.jpg" alt="Gallery image">
                        </figure>
                    </li>

                    <li class="gallery-item">
                        <figure class="gallery-image">
                            <img src="/css/img/gallery-4.jpg" alt="Gallery image">
                        </figure>
                    </li>

                    <li class="gallery-item">
                        <figure class="gallery-image">
                            <img src="/css/img/gallery-5.jpg" alt="Gallery image">
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


<!--
  - #FOOTER
-->

<footer class="footer">

    <div class="footer-top">
        <div class="container">

            <div class="footer-brand">

                <a href="#" class="logo">
                    <img src="/css/img/logo.svg" alt="Tourly logo">
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


<a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
</a>



<script src="script.js"></script>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>