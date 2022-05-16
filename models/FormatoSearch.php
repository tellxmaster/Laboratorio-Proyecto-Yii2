<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Formato;

/**
 * FormatoSearch represents the model behind the search form of `app\models\Formato`.
 */
class FormatoSearch extends Formato
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FOR_ID'], 'integer'],
            [['FOR_NOMBRE'], 'safe'],
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
        $query = Formato::find();

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
            'FOR_ID' => $this->FOR_ID,
        ]);

        $query->andFilterWhere(['like', 'FOR_NOMBRE', $this->FOR_NOMBRE]);

        return $dataProvider;
    }
}
