<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pku;

/**
 * PkuSearch represents the model behind the search form of `app\models\Pku`.
 */
class PkuSearch extends Pku
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'j_utusan', 'quran', 'arab', 'inggris', 'wawasan', 's2', 'nilai', 'hasil'], 'integer'],
            [['nama', 'tgl', 'daerah', 'utusan'], 'safe'],
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
        $query = Pku::find();

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
            'tgl' => $this->tgl,
            'j_utusan' => $this->j_utusan,
            'quran' => $this->quran,
            'arab' => $this->arab,
            'inggris' => $this->inggris,
            'wawasan' => $this->wawasan,
            's2' => $this->s2,
            'nilai' => $this->nilai,
            'hasil' => $this->hasil,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'daerah', $this->daerah])
            ->andFilterWhere(['like', 'utusan', $this->utusan]);

        return $dataProvider;
    }
}
