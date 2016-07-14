<?php
use yii\helpers\Html;
use common\enpii\components\grid\GridView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchParkerItem */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Parker Items');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parker-item-index">
    <div class="page-bar">
        <?= Breadcrumbs::widget([
            'itemTemplate' => "<li>{link}<i class='fa fa-circle'></i></li>\n",
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'options' => [
                'class' => 'page-breadcrumb'
            ]
        ]) ?>
    </div>
    <h3 class="page-title">
        <?= Html::encode($this->title) ?>
    </h3>
    <div class="portlet light bordered">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="portlet">
                    <div class="portlet-title">
                        <div class="caption">
                                <span class="caption-subject font-green-sharp bold uppercase">
                                    <?= Yii::t("app", "parker-item Listing") ?>
                                </span>
                                <span class="caption-helper">
                                    <?= Yii::t("app", "manage parker-item") . "..." ?>
                                </span>
                        </div>
                        <div class="actions">
                            <?= Html::a('<i class="fa fa-plus"></i><span class="hidden-480">' .
                                Yii::t('app', 'Create Parker Item'),
                                ['create'],
                                ['class' => 'btn btn-default btn-circle']) ?>
                        </div>
                    </div>

                    <?= $this->render('_search', ['model' => $searchModel]) ?>

                    <div class="portlet-body">

                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'common\enpii\components\grid\CheckboxColumn'],
                                ['class' => 'common\enpii\components\grid\SerialColumn'],
                                [
                                    'attribute' => 'user_id',
                                    'label' => 'Email',
                                    'value' => 'user.username'
                                ],
                                'nric_number',
                                [
                                    'attribute' => 'bank_id',
                                    'label' => 'Bank',
                                    'value' => 'bank.name'
                                ],
                                [
                                    'attribute' => 'collection_days_id',
                                    'label' => 'Collection Days',
                                    'value' => 'collectionDays.name'
                                ],
                                 'bank_account_number',
                                [
                                    'attribute' => 'collection_start_at',
                                    'label' => 'From',
                                ],
                                [
                                    'attribute' => 'collection_end_at',
                                    'label' => 'To',
                                ],
                                ['class' => 'common\enpii\components\grid\ActionColumn'],
                            ],
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
