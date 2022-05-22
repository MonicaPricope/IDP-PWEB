<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Shelter2;

/**
 * Shelter2Search represents the model behind the search form of `app\models\Shelter2`.
 */
class Shelter2Search extends Shelter2
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ocupants', 'capacity', 'map_user'], 'integer'],
            [['title', 'location', 'admin_name', 'admin_phone'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Shelter2::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'ocupants' => $this->ocupants,
            'capacity' => $this->capacity,
            'map_user' => $this->map_user,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'admin_name', $this->admin_name])
            ->andFilterWhere(['like', 'admin_phone', $this->admin_phone]);

        return $dataProvider;
    }
}
