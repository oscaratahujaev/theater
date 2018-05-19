<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PerformancePosition;

/**
 * PerformancePositionSearch represents the model behind the search form about `app\models\PerformancePosition`.
 */
class PerformancePositionSearch extends PerformancePosition
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'position_id'], 'integer'],
            [['fullname'], 'safe'],
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
        $query = PerformancePosition::find();

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
            'position_id' => $this->position_id,
        ]);

        $query->andFilterWhere(['like', 'fullname', $this->fullname]);

        return $dataProvider;
    }
}
