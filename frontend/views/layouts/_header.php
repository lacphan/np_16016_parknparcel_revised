<?php


/* @var $this \yii\web\View
 * @var $pageFaqs common\models\CommonPageItem
 * @var $pagePrizeDetails common\models\CommonPageItem
 * @var $content string
 */

use yii\bootstrap\Nav;

?>
<header id="masthead" class="site-header" role="banner" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <div class="pull-left">
            <div class="main-logo">
                <a href="<?= Yii::$app->homeUrl ?>">
                    <img src="<?= Yii::$app->urlManager->getBaseUrl() . '/themes/default/images/main-logo.png' ?>"
                         alt="">
                </a>
            </div>
        </div>
        <div class="pull-right">
            <div class="top-controls">
                <a href="#"><i class="fa fa-pencil"></i><?= Yii::t('app', 'Sign Up') ?></a>
                <?php if (!Yii::$app->user->isGuest) { ?>
                    <a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                    <?php
                } else {
                    ?>
                    <a href="#"><i class="fa fa-lock"></i><?= Yii::t('app','Login') ?></a>
                    <?php
                } ?>

            </div>
            <div class="main-navigation">
                <div class="">
                    <div class="navbar navbar-default">
                        <div class="navbar-header hidden-mobile">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#site-navigation" aria-expanded="false"
                                    aria-controls="site-navigation">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <nav id="site-navigation" class="navbar-collapse collapse" role="navigation">
                            <div class="menu-primary-menu-container">
                                <?php

                                $menuItems = [
                                    ['label' => 'Home', 'url' => Yii::$app->homeUrl],
                                    ['label' => 'About Us', 'url' =>  Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'about-us'])],
                                    ['label' => 'FAQ', 'url' =>  Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'faq-parker'])],
                                    ['label' => 'Contact Us', 'url' => Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'contact'])],
                                    ['label' => Yii::t('app', 'Be a Parker'), 'url' => Yii::$app->urlManager->createUrl(['site/parker-register'])],
                                ];

                                echo Nav::widget([
                                    'options' => [
                                        'class' => 'menu nav navbar-nav',
                                        'id' => 'menu-primary-menu'
                                    ],
                                    'items' => $menuItems,
                                ]);
                                ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="clerfix"></div>
    </div>
</header>

