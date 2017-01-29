<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Credenciacao;

/**
 * CredenciacaoSearch represents the model behind the search form about `app\models\Credenciacao`.
 */
class CredenciacaoSearch extends Credenciacao
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'congresso', 'militante'], 'integer'],
            [['voto', 'data'], 'safe'],
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
        $query = Credenciacao::find();

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
            'congresso' => $this->congresso,
            'militante' => $this->militante,
        ]);

        $query->andFilterWhere(['like', 'voto', $this->voto])
            ->andFilterWhere(['like', 'data', $this->data]);

        return $dataProvider;
    }
}
