<?php

namespace backend\models\search;

use backend\models\SystemLog;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * SystemLogSearch represents the model behind the search form about `backend\models\SystemLog`.
 */
class SystemLogSearch extends SystemLog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'message'], 'integer'],
            [['category', 'prefix', 'log_time', 'level'], 'safe'],
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
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SystemLog::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'level' => $this->level,
//            'log_time' => $this->log_time,
            'message' => $this->message,
        ]);

        if (!empty($this->log_time) && strpos($this->log_time, ' - ') !== false ) {
            list($start_date, $end_date) = explode(' - ', $this->log_time);
            $query->andFilterWhere(['between', 'log_time', strtotime($start_date), strtotime($end_date)]);
        }

        $query->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'prefix', $this->prefix]);

        return $dataProvider;
    }
}
