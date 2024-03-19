<?php

use app\assets\TourAsset;
use yii\bootstrap4\Html;
use yii\widgets\ActiveForm;

TourAsset::register($this)

?>

<?php $form = ActiveForm::begin([
    'id' => 'login-form',
]); ?>

<main>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Moench_2339.jpg/1200px-Moench_2339.jpg"
                     class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://icdn.bolshayastrana.com/940x00/a1/83/a18315923434e4697f16a3c1ec37fe2b.jpeg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://icdn.bolshayastrana.com/940x00/a1/83/a18315923434e4697f16a3c1ec37fe2b.jpeg"
                     class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <?php ActiveForm::end(); ?>


    <div class="container marketing">
        <li>
            <div class="package-card">

                <figure class="card-banner">
                    <img src="/tours/image?path=tours-<?=$tour->id?>-main" alt="Santorini Island's Weekend Vacation"
                         loading="lazy">
                </figure>

                <div class="card-content">

                    <h3 class="h3 card-title"><?=$tour->title?></h3>

                    <p class="card-text"><?=$tour->short_description?> </p>

                    <ul class="card-meta-list">



                        <li class="card-meta-item">
                            <div class="meta-box">
                                <ion-icon name="people"></ion-icon>

                                <p class="text">человек: <?=$tour->human_count?></p>
                            </div>
                        </li>

                        <li class="card-meta-item">
                            <div class="meta-box">
                                <ion-icon name="location"></ion-icon>

                                <p class="text"><?=$tour->hotel->country->name?></p>
                            </div>
                        </li>

                    </ul>

                </div>

                <div class="card-price">


                    <p class="price">
                        <?=$tour->price?> ₽
                        <span>/ на человека</span>
                    </p>

                    <button class="btn btn-secondary">Купить</button>

                </div>

            </div>
        </li>
    </div>


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span
                            class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting
                    prose here.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                     height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                     preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee"/>
                    <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                </svg>

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it’s that good. <span
                            class="text-muted">See for yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how
                    this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                     height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                     preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee"/>
                    <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                </svg>

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really
                    intended to be actually read, simply here to give you a better view of what this would look like
                    with some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                     height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                     preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee"/>
                    <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                </svg>

            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
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
                    <svg class="close-popup" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24">
                        <path fill="#2982ff"
                              d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/>
                    </svg>
                    <label>
                        <p> Текст-рыба
                            Значимость этих проблем настолько очевидна, что новая модель организационной деятельности
                            позволяет оценить значение модели развития. Значимость этих проблем настолько очевидна, что
                            новая модель организационной деятельности играет важную роль в формировании направлений
                            прогрессивного развития. Разнообразный и богатый опыт постоянное
                            информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение
                            позиций, занимаемых участниками в отношении поставленных задач.
                    </label>

                </form>
            </div>
        </div>
    </section>


</main>