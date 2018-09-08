<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

//AppAsset::register($this);

\app\assets\CompAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">


<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>


<!--    <link href="css/normalize.css" rel="stylesheet" />-->
<!--    <link href="css/style.css" rel="stylesheet" />-->


</head>

<body>
<?php $this->beginBody() ?>
<div class="head">
    <div class="container">
        <div class="logo">
            <a href="#"><img src="/images/logo.png" /></a>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Testimonial</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="Bground">
    <?= $content ?>

    <div class="end">
        <div class="container">
            <div class="menuEnd">
                <div class="menuE">
                    <ul type="none">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                        </li>
                        <li>
                            <a href="#">Testimonial</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="webcorp">
                    <ul type="none">
                        <li>
                            <a href="#">&#169 2010 WebCorp LLC</a>
                        </li>
                        <li>
                            <a href="#">Terms of service</a>
                        </li>
                        <li>
                            <a href="#">Privacy policy</a>
                        </li>
                    </ul>
                </div>
                <div class="icons">
                    icons courtesy <a href="#">IconFinder.com</a>
                </div>
            </div>
            <div class="connect">
                <div class="connecttext">
                    Connect with us:
                </div>
                <div class="connecticon">
                    <div class="connect1">
                        <a href="#"></a>
                    </div>
                    <div class="connect2">
                        <a href="#"></a>
                    </div>
                    <div class="connect3">
                        <a href="#"></a>
                    </div>
                    <div class="connect4">
                        <a href="#"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
