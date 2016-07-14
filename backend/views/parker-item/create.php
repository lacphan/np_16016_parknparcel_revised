<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ParkerItem */

$this->title = Yii::t('app', 'Create Parker Item');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Parker Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parker-item-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
