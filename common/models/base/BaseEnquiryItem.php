<?php

namespace common\models\base;

use yii;

/**
 * This is the model class for table "{{%enquiry_item}}".
 *
 * @property integer $id
 * @property string $name
 *
 * @property BaseUserProfile[] $userProfiles
 */
class BaseEnquiryItem extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%enquiry_item}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProfiles()
    {
        return $this->hasMany(BaseUserProfile::className(), ['enquiry_id' => 'id']);
    }
}
