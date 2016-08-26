<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Assignment;

/**
 * AssignmentSearch represents the model behind the search form about `app\models\Assignment`.
 */
class AssignmentSearch extends Assignment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'duration'], 'integer'],
            [['date', 'time', 'time_created', 'slug', 'reporter_name', 'location', 'assignment_info', 'contact_info', 'photographer'], 'safe'],
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
        $query = Assignment::find();

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


        $query->joinWith('photographers');

        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
            'time' => $this->time,
            'duration' => $this->duration,
            //'photographer' => $this->photographer,
            'time_created' => $this->time_created,
        ]);

        $query->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'reporter_name', $this->reporter_name])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'assignment_info', $this->assignment_info])
            ->andFilterWhere(['like', 'contact_info', $this->contact_info])
            ->andFilterWhere(['like', 'photographers.photographer_name', $this->photographer]);

        return $dataProvider;
    }
}
