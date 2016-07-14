<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\enpii\components\widget\datepicker\DateRangePicker;
use backend\models\ParkerItem;

/**
 * SearchParkerItem represents the model behind the search form about `backend\models\ParkerItem`.
 */
class SearchParkerItem extends ParkerItem
{
    /**
    * @var $globalSearch
    */
    public $globalSearch;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'attachment_id', 'bank_id', 'collection_days_id'], 'integer'],
            [['nric_number', 'bank_account_number', 'collection_start_at', 'collection_end_at'], 'safe'],
            [['globalSearch'],'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ParkerItem::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'attachment_id' => $this->attachment_id,
            'bank_id' => $this->bank_id,
            'collection_days_id' => $this->collection_days_id,
            'collection_start_at' => $this->collection_start_at,
            'collection_end_at' => $this->collection_end_at,
        ]);

        $query->andFilterWhere(['like', 'nric_number', $this->nric_number])
            ->andFilterWhere(['like', 'bank_account_number', $this->bank_account_number]);

        $query->orFilterWhere(['like','id', $this->globalSearch]);
        $query->orFilterWhere(['like','user_id', $this->globalSearch]);
        $query->orFilterWhere(['like','nric_number', $this->globalSearch]);
        $query->orFilterWhere(['like','attachment_id', $this->globalSearch]);
        $query->orFilterWhere(['like','bank_id', $this->globalSearch]);
        $query->orFilterWhere(['like','bank_account_number', $this->globalSearch]);
        $query->orFilterWhere(['like','collection_days_id', $this->globalSearch]);
        $query->orFilterWhere(['like','collection_start_at', $this->globalSearch]);
        $query->orFilterWhere(['like','collection_end_at', $this->globalSearch]);
        
        return $dataProvider;
    }
}
