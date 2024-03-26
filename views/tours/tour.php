<?php

use app\assets\TourAsset;
use yii\bootstrap4\Html;
use yii\widgets\ActiveForm;

TourAsset::register($this);
$aliasTours = \Yii::getAlias("@app/upload/tours/{$tour->id}");
$aliasCountry = \Yii::getAlias("@app/upload/country/{$tour->hotel->country->id}");
$countTours = count(glob("$aliasTours/slider/*"));
$countCountry = count(glob("$aliasCountry/slider/*"));
$dropDownList = [];
foreach (range(1,$tour->human_count) as $item ){
    $dropDownList[$item]=$item;
}
?>



<main >
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php for($i = 0; $i < $countCountry; $i++): ?>
            <li data-target="#myCarousel" data-slide-to="<?=$i?>" <?=($i==0)?'class="active"':''?>></li>
            <?php endfor;?>
        </ol>
        <div class="carousel-inner">
            <?php for($i = 0; $i < $countCountry; $i++): ?>
            <div class="carousel-item <?=($i==0)?'active':''?>">
                <img src="/tours/image?path=country-<?=$tour->hotel->country->id?>-slider-<?=$i+1?>"
                     class="d-block w-100" alt="...">
            </div>
            <?php endfor;?>
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
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                    ]); ?>
                    <?=$form->field($model,'count')->dropDownList($dropDownList)->label('Кол-во')?>
                    <button type="submit" class="btn btn-secondary">Купить</button>
                    <?php ActiveForm::end(); ?>
                </div>

            </div>
        </li>
    </div>


    <hr class="featurette-divider">
    <div class="row featurette container" >
<!--        <div class="col-md-7 order-md-2">-->
        <div class="col-md-9 order-md-2"">
            <h5 class="featurette-heading" ><?=$tour->title?> </h5>
            <p class="lead" > <?=$tour->description?> </p>
        </div>
    </div>


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Отель: <?=$tour->hotel->name?></h2>
                <p class="lead"><?=$tour->hotel->description?></p>
                <p class="lead"style="margin-left: 150px">Рейтинг <?=$tour->hotel->rating?>/5</p>
                <p class="lead"style="margin-left: 150px">Цена:<?=$tour->hotel->price?></p>
            </div>
            <div class="col-md-5">
                <img src="/tours/image?path=hotels-<?=$tour->hotel->id?>-main" width="400" height="400">
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
    <section class="popular" id="destination">
        <div class="container">

            <h2 class="h2 section-title">Фотки</h2>

            <ul class="popular-list">
                <?php for($i = 0; $i < $countTours; $i++): ?>
                <li>
                    <div class="popular-card">

                        <figure class="card-img">
                            <img src="/tours/image?path=tours-<?=$tour->id?>-slider-<?=$i+1?>" alt="San miguel, italy" loading="lazy">
                        </figure>

                    </div>
                </li>
                <?php endfor; ?>
            </ul>

        </div>
    </section>

</main>