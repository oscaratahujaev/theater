<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PerformanceArtist;

/**
 * PerformanceArtistSearch represents the model behind the search form about `app\models\PerformanceArtist`.
 */
class PerformanceArtistSearch extends PerformanceArtist
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'performance_id', 'artist_id'], 'integer'],
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
        $query = PerformanceArtist::find();

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
            'artist_id' => $this->artist_id,
        ]);

        return $dataProvider;
    }
}
