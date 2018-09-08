<?php

/* @var $this yii\web\View */
/* @var $items \app\models\Items[] */

$this->title = 'My Yii Application';

use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="slider">
    <div class="sliderBg2">
        <div class="container" style="min-height:502px;">
            <div class="bxslider">
                <div><img src="/images/slider/slide-1.png"></div>
                <div><img src="/images/slider/slide-1.png"></div>
                <div><img src="/images/slider/slide-1.png"></div>

            </div>
<!--            <ul class="sliderImage">-->
<!--                <li>-->
<!--                    <a href="#"><img src="images/slider/slide-1.png" /></a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#"><img src="images/slider/slide-1.png" /></a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#"><img src="images/slider/slide-1.png" /></a>-->
<!--                </li>-->
<!---->
<!--            </ul>-->

            <ul class="sliderNav">


                <li>

                </li>
                <li>

                </li>
                <li>

                </li>
                <li>

                </li>
            </ul>
        </div>
    </div>
</div>
<div class="Bground">
    <div class="yourweb">
        <div class="container">
            <div class="webtext">
                We can make your online business easy & usable for all walks of people
            </div>
            <div class="buttonweb">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="shadow">
        </div>
        <div class="foto">
            <? foreach ($items as $item) { ?>
                <div class="foto1">
                    <div class="picture">
                        <a href="#"><img src="/<?=$item->url?>" alt="#"/></a>
                    </div>
                    <div class="business">
                        <?=$item->title?>
                    </div>
                    <div class="businesstext">
                        <?=$item->descriprion?>
                    </div>

                    <?=
                    Html::a(
                            '<div class="readbutton"></div>',
                            Url::to(['view', 'id'=>$item->id])
                    )
                    ?>

                </div>
            <? } ?>




        </div>
        <div class="info">
            <div class="title">
                <div class="pic">
                </div>
                <div class="titleheading">
                    Title Heading
                </div>
                <div class="pictext">
                    Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Aliqu am tincidunt mi id libero egestas ut interdum nibh cursus.
                </div>
                <div class="pic2">
                </div>
                <div class="titleheading">
                    Title Heading
                </div>
                <div class="pictext">
                    Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Aliqu am tincidunt mi id libero egestas ut interdum nibh cursus.
                </div>
            </div>
            <div class="title">
                <div class="pic3">
                </div>
                <div class="titleheading">
                    Title Heading
                </div>
                <div class="pictext">
                    Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Aliqu am tincidunt mi id libero egestas ut interdum nibh cursus.
                </div>
                <div class="pic4">
                </div>
                <div class="titleheading">
                    Title Heading
                </div>
                <div class="pictext">
                    Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Aliqu am tincidunt mi id libero egestas ut interdum nibh cursus.
                </div>
            </div>
            <div class="aboutcompany">
                <div class="titleheading">
                    About the Company
                </div>
                <div class="pictext2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt mi id libero egestas ut interdum nibh cursus. Nulla erat orci, adipiscing vel molestie ac, vehicula in dui.
                    Proin vel lorem in tellus placerat eleifend. Duis iaculis lorem a ipsum euismod vel ullamcorper arcu placerat. Aenean elementum tortor vel nisi bibendum bibendum.
                    Aliquam fringilla feugiat ante in vestibulum. Sed non justo justo. Aenean et quam dolor. Vivamus aliquet gravida nunc, sed elementum elit blandit vel.
                    Aliquam neque quam, dignissim ac mattis at, hendrerit nec elit. Cras commodo gravida placerat.
                </div>
                <div class="readmore">
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
