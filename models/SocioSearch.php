<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Socio;

/**
 * SocioSearch represents the model behind the search form of `app\models\Socio`.
 */
class SocioSearch extends Socio
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SOC_ID'], 'integer'],
            [['SOC_CEDULA', 'SOC_NOMBRE', 'SOC_DIRECCION', 'SOC_TELEFONO', 'SOC_CORREO'], 'safe'],
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
        $query = Socio::find();

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
            'SOC_ID' => $this->SOC_ID,
        ]);

        $query->andFilterWhere(['like', 'SOC_CEDULA', $this->SOC_CEDULA])
            ->andFilterWhere(['like', 'SOC_NOMBRE', $this->SOC_NOMBRE])
            ->andFilterWhere(['like', 'SOC_DIRECCION', $this->SOC_DIRECCION])
            ->andFilterWhere(['like', 'SOC_TELEFONO', $this->SOC_TELEFONO])
            ->andFilterWhere(['like', 'SOC_CORREO', $this->SOC_CORREO]);

        return $dataProvider;
    }
}
