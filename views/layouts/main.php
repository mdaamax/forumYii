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
    ['label' => 'О нас', 'url' => ['/site/about']],
    ['label' => 'Контакты', 'url' => ['/site/contact']],
];
if (Yii::$app->user->isGuest) {
    $items[] = ['label' => 'Авторизация', 'url' => ['/site/login']];
    $items[] = ['label' => 'Регистрация', 'url' => ['/site/registration']];
} else {
    if (Yii::$app->user->can('admin')){
        $items[] = ['label' => 'Панель Администратора', 'items' => [
            ['label' => 'Создать тур', 'url' => ['/tours/create-tour']],
            ['label' => 'Создать отели', 'url' => ['/tours/create-hotel']],
            ['label' => 'Настройка странн', 'url' => ['/countries']],
            ['label' => 'Глобальная история', 'url' => ['/basket/global-history']],
        ]];
    }
    $items[] = ['label' => 'История', 'url' => ['/basket/history']];
    $items[] = ['label' => 'Корзина', 'url' => ['/basket']];
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

            <a class="navbar-brand" href="/">
                <strong><span>Valim</span></strong>
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
<main>
    <article>
        <?= $content ?>
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
