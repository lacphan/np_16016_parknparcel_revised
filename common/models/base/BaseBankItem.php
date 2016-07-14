<?php

namespace common\models\base;

use yii;

/**
 * This is the model class for table "{{%bank_item}}".
 *
 * @property integer $id
 * @property string $name
 *
 * @property BaseParkerItem[] $parkerItems
 */
class BaseBankItem extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bank_item}}';
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
    public function getParkerItems()
    {
        return $this->hasMany(BaseParkerItem::className(), ['bank_id' => 'id']);
    }
}
