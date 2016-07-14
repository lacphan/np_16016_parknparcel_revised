<?php

namespace common\models\base;

use yii;

/**
 * This is the model class for table "{{%collections_days_item}}".
 *
 * @property integer $id
 * @property string $name
 *
 * @property BaseParkerItem[] $parkerItems
 */
class BaseCollectionsDaysItem extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%collections_days_item}}';
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
        return $this->hasMany(BaseParkerItem::className(), ['collection_days_id' => 'id']);
    }
}
