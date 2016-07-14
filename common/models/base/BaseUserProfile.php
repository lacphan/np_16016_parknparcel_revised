<?php

namespace common\models\base;

use yii;

/**
 * This is the model class for table "{{%user_profile}}".
 *
 * @property integer $id
 * @property string $address
 * @property string $city
 * @property string $street
 * @property string $province
 * @property string $post_code
 * @property string $phone_number
 * @property string $united
 * @property string $date_of_birth
 * @property integer $enquiry_id
 *
 * @property BaseUser[] $users
 * @property BaseEnquiryItem $enquiry
 */
class BaseUserProfile extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_profile}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_of_birth'], 'safe'],
            [['enquiry_id'], 'integer'],
            [['address', 'city', 'street', 'province', 'post_code'], 'string', 'max' => 255],
            [['phone_number', 'united'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'address' => Yii::t('app', 'Address'),
            'city' => Yii::t('app', 'City'),
            'street' => Yii::t('app', 'Street'),
            'province' => Yii::t('app', 'Province'),
            'post_code' => Yii::t('app', 'Post Code'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'united' => Yii::t('app', 'United'),
            'date_of_birth' => Yii::t('app', 'Date Of Birth'),
            'enquiry_id' => Yii::t('app', 'Enquiry ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(BaseUser::className(), ['profile_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnquiry()
    {
        return $this->hasOne(BaseEnquiryItem::className(), ['id' => 'enquiry_id']);
    }
}
