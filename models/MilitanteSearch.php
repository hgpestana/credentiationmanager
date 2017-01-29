<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Militante;

/**
 * MilitanteSearch represents the model behind the search form about `app\models\Militante`.
 */
class MilitanteSearch extends Militante
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'numero', 'seccao'], 'integer'],
            [['nome', 'sexo', 'morada', 'localidade', 'codigopostal', 'email', 'dataadesao', 'datanascimento', 'telefone', 'telemovel'], 'safe'],
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
        $query = Militante::find();

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
            'numero' => $this->numero,
            'seccao' => $this->seccao,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'morada', $this->morada])
            ->andFilterWhere(['like', 'localidade', $this->localidade])
            ->andFilterWhere(['like', 'codigopostal', $this->codigopostal])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'dataadesao', $this->dataadesao])
            ->andFilterWhere(['like', 'datanascimento', $this->datanascimento])
            ->andFilterWhere(['like', 'telefone', $this->telefone])
            ->andFilterWhere(['like', 'telemovel', $this->telemovel]);

        return $dataProvider;
    }
}
