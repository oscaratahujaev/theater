<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Repertuar;

/**
 * RepertuarSearch represents the model behind the search form about `app\models\Repertuar`.
 */
class RepertuarSearch extends Repertuar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'performance_id', 'price', 'status'], 'integer'],
            [['date'], 'safe'],
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
        $query = Repertuar::find();

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
            'performance_id' => $this->performance_id,
            'date' => $this->date,
            'price' => $this->price,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
