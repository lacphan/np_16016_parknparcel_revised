<?php

namespace common\models\base;

use yii;

/**
 * This is the model class for table "{{%parker_item}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $nric_number
 * @property integer $attachment_id
 * @property integer $bank_id
 * @property string $bank_account_number
 * @property integer $collection_days_id
 * @property string $collection_start_at
 * @property string $collection_end_at
 *
 * @property BaseBankItem $bank
 * @property BaseCollectionsDaysItem $collectionDays
 * @property BaseUser $user
 */
class BaseParkerItem extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%parker_item}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'attachment_id', 'bank_id', 'collection_days_id'], 'integer'],
            [['collection_start_at', 'collection_end_at'], 'safe'],
            [['nric_number', 'bank_account_number'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'nric_number' => Yii::t('app', 'Nric Number'),
            'attachment_id' => Yii::t('app', 'Attachment ID'),
            'bank_id' => Yii::t('app', 'Bank ID'),
            'bank_account_number' => Yii::t('app', 'Bank Account Number'),
            'collection_days_id' => Yii::t('app', 'Collection Days ID'),
            'collection_start_at' => Yii::t('app', 'Collection Start At'),
            'collection_end_at' => Yii::t('app', 'Collection End At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBank()
    {
        return $this->hasOne(BaseBankItem::className(), ['id' => 'bank_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionDays()
    {
        return $this->hasOne(BaseCollectionsDaysItem::className(), ['id' => 'collection_days_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(BaseUser::className(), ['id' => 'user_id']);
    }
}
