<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 11/16/15
 * Time: 10:40 AM
 */
use yii\bootstrap\Nav;
use frontend\models\PageItem;

/**
 * @var $privacy common\models\CommonPageItem
 * @var $termsConditions common\models\CommonPageItem
 */
?>
<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-content">
            <div class="footer-menu">
                <ul>

                    <li><a href="<?= Yii::$app->urlManager->createUrl(['']) ?>"><?= Yii::t('app', 'Home') ?></a></li>
                    <li><a href="<?= Yii::$app->urlManager->createUrl(['']) ?>"><?= Yii::t('app', 'Privacy Policy') ?></a></li>
                    <li><a href="<?= Yii::$app->urlManager->createUrl(['']) ?>"><?= Yii::t('app', 'Terms and Conditions') ?></a></li>
                    <li><a href="<?= Yii::$app->urlManager->createUrl(['']) ?>"><?= Yii::t('app', 'Disclaimer') ?></a></li>
                    <li><a href="<?= Yii::$app->urlManager->createUrl(['']) ?>"><?= Yii::t('app', 'Contact us') ?></a></li>
                </ul>
            </div>
            <div class="footer-social">
                <a href="#"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/fb-icon.png'?>" alt=""></a>
                <a href="#"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/twister-icon.png'?>" alt=""></a>
                <a href="#"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/instagram-icon.png'?>" alt=""></a>
               
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer><!-- .site-footer -->