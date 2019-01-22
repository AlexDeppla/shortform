<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use frontend\models\Category;

AppAsset::register($this);
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
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-body fixed-top">
                <div class="container text-white">
                    <a class="navbar-brand" href="/">Short form</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= Url::toRoute(['/site/about']); ?>">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categories
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                                    <a class="dropdown-item" href="portfolio-1-col.html">Sci-fy</a>
                                    <a class="dropdown-item" href="portfolio-2-col.html">Drama</a>
                                    <a class="dropdown-item" href="portfolio-3-col.html">Comdedy</a>
                                    <a class="dropdown-item" href="portfolio-4-col.html">Mystery</a>
                                </div>
                            </li>
                            <?php
                            if (Yii::$app->user->isGuest) {
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= Url::toRoute(['/user/signup']); ?>">Signup</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= Url::toRoute(['/user/login']); ?>">Login</a>
                                </li>

                                <?php
                            } else {
                                ?>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?= Url::toRoute(['/user/logout']); ?>">Logout</a>
                                </li>

                                <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </nav>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>