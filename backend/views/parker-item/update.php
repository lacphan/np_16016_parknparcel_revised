<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ParkerItem */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Parker Item',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Parker Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="parker-item-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
