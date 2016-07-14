<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\BankItem;
use frontend\models\EnquiryItem;
use frontend\models\CollectionsDaysItem;
use yii\helpers\ArrayHelper;

$this->title = Yii::t('app', 'Sign Up as Parker');
/* @var $this yii\web\View */
/* @var $model frontend\models\ParkerRegisterForm */
/* @var $form ActiveForm */
?>
<div class="tmp-signup">
    <div class="container">
        <div class="my-breadcrumb">
            <a href="<?= Yii::$app->urlManager->baseUrl ?>">Home</a> /
            <span>Sign Up As A Parker</span>
        </div>
        <div class="signup-title">Sign Up As A Parker</div>
        <div class="signup-form">
            <?php $form = ActiveForm::begin(); ?>

            <div class="form-group">

            </div>
            <div class="form-left">
                <div class="form-title">PERSONAL DETAILS</div>
                <div class="form-content">
                    <div class="form-row row">
                        <div class="col-sm-6">
                            <?= $form->field($model, 'firstName') ?> </div>
                        <div class="col-sm-6">
                            <?= $form->field($model, 'lastName') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <?= $form->field($model, 'address') ?>
                    </div>
                    <div class="form-row row">
                        <div class="col-sm-6">
                            <?= $form->field($model, 'postCode') ?>
                        </div>
                        <div class="col-sm-6">
                            <?= $form->field($model, 'phoneNumber')->label(Yii::t('app', 'MOBILE NO.')) ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <?= $form->field($model, 'nricNumber')->label(Yii::t('app', 'NRIC NO.')) ?>
                    </div>
                    <div class="form-row ">
                        <div class="form-group required">
                            <label for="">UPLOAD PROOF OF MAILING ADDRESS </label>
                            <div class="note">A photo of the back of your IC or Telco/Bank/Utility letter with address
                            </div>
                            <?= $form->field($model, 'uploadFile', [
                                'options' => [
                                    'tag' => false
                                ]
                            ])->fileInput()->label(false) ?>
                        </div>

                    </div>
                    <div class="form-row">
                        <?= $form->field($model, 'bankID')->dropDownList(
                            ArrayHelper::map(BankItem::find()->all(),'id','name'),
                            [
                                'prompt' => Yii::t('app', '- Select One -'),
                            ]

                        )->label(Yii::t('app','Bank')); ?>
                    </div>
                    <div class="form-row">
                        <?= $form->field($model, 'bankAccountNumber') ?>
                    </div>
                </div>
            </div>
            <div class="form-right">
                <div class="form-title">Login Details</div>
                <div class="form-content">
                    <div class="form-row row">
                        <div class="col-sm-6">
                            <?= $form->field($model, 'email')->label(Yii::t('app', 'Email Address')) ?>
                        </div>
                        <div class="col-sm-6">
                            <?= $form->field($model, 'password') ?>
                        </div>
                    </div>
                    <div class="parker-collection">
                        <div class="form-title">
                            PARKER’s collection <br>
                            preferences &amp; details
                        </div>
                        <div class="form-row">
                            <div class="form-group form-radio">
                                <label for="">Preferred USER collection days <i>*</i></label>
                                <div class="note">The available days for User to collect parcel at your place</div>
                                <div class="collection-day">
                                    <?= $form->field($model, 'collectionDaysID')->radioList(
                                        ArrayHelper::map(CollectionsDaysItem::find()->all(),'id','name')
                                    )->label(false) ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="">Preferred User Collection Time <i>*</i></label>
                            <div class="note">The available timing for User to collect parcel at your place on the
                                preferred days.
                                From and to time must be atleast 3 hours apart.
                            </div>
                            <div class="collection-time">
                                <?= $form->field($model, 'collectionStartAt')->dropDownList(
                                    [
                                        1 => 'Lorem Ipsum',
                                    ],
                                    [
                                        'prompt' => '',
                                    ])->label(Yii::t('app','From')) ?>

                                <?= $form->field($model, 'collectionEndAt')->dropDownList(
                                    [
                                        1 => 'Lorem Ipsum',
                                    ],
                                    [
                                        'prompt' => '',
                                    ])->label(Yii::t('app','To'))?>
                            </div>
                        </div>
                        <div class="form-row">
                            <?= $form->field($model, 'enquiryID')->dropDownList(
                                ArrayHelper::map(EnquiryItem::find()->all(),'id','name'),
                                [
                                    'prompt' => '- Select One',
                                ])->label(Yii::t('app','How do you know about Park N Parcel? ')) ?>

                        </div>
                    </div>
                    <div class="submit-button">
                        <?= Html::submitButton(Yii::t('app', 'Sign up as a Parker'), ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
                <div class="success"></div>
            </div>
            <div class="clearfix"></div>
            <?php ActiveForm::end(); ?>
        </div>

    </div>
    <div class="block-tab parker">
        <div class="tab-control">
            <div class="container">
            </div>
        </div>
        <div class="tab-content">

        </div>
    </div>
</div>
<div class="site-parker-register">


</div><!-- site-parker-register -->
