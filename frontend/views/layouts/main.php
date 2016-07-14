<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\NpAsset;
use frontend\assets\BootstrapPluginAsset;
use frontend\assets\AppAsset;
//User::hasLoginBE();
BootstrapPluginAsset::register($this);
NpAsset::register($this);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/favicon.png'?>" type="image/x-icon" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="main-container" class="site-wrapper">
    <div class="site-inner">

        <!-- Begin header -->
        <?php $this->beginContent('@app/views/layouts/_header.php'); ?>
        <?= $content ?>
        <?php $this->endContent(); ?>
        <!-- End header -->
        <div id="content" class="site-content">
        <?= $content ?>
        </div>

        <!-- Begin footer -->
        <?php $this->beginContent('@app/views/layouts/_footer.php'); ?>
        <?= $content ?>
        <?php $this->endContent(); ?>
        <!-- End Footer -->
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
