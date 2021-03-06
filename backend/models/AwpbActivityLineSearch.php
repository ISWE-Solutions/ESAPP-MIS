<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AwpbActivityLine;

/**
 * AwpbActivityLineSearch represents the model behind the search form of `backend\models\AwpbActivityLine`.
 */

class AwpbActivityLineSearch extends AwpbActivityLine
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'activity_id','awpb_template_id','status', 'district_id', 'province_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name'], 'safe'],
            [['unit_cost', 'mo_1', 'mo_2', 'mo_3', 'mo_4', 'mo_5', 'mo_6', 'mo_7', 'mo_8', 'mo_9', 'mo_10', 'mo_11', 'mo_12', 'quarter_one_quantity', 'quarter_two_quantity', 'quarter_three_quantity', 'quarter_four_quantity', 'total_quantity','mo_1_amount', 'mo_2_amount', 'mo_3_amount', 'mo_4_amount', 'mo_5_amount', 'mo_6_amount', 'mo_7_amount', 'mo_8_amount', 'mo_9_amount', 'mo_10_amount', 'mo_11_amount', 'mo_12_amount', 'quarter_one_amount', 'quarter_two_amount', 'quarter_three_amount', 'quarter_four_amount', 'total_amount'], 'number'],

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

        $query = AwpbActivityLine::find();

        // add conditions that should always apply here
        // $query->select('awpb_template_id');
        // $query->select('province_id');
        // $query->select('district_id');
        // $query->select('SUM(quarter_one_quantity) AS quarter_one_quantity');
        // $query->select('SUM(quarter_two_quantity) AS quarter_two_quantity');
        // $query->select('SUM(quarter_three_quantity) AS quarter_three_quantity');
        // $query->select('SUM(quarter_four_quantity) AS quarter_four_quantity');
        // $query->select('SUM(total_quantity) AS total_quantity');
        // $query->select('SUM(total_amount) AS total_amount');


        // $query->groupBy('province_id');


        // $query->groupBy('district_id');





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
            'activity_id' => $this->activity_id,
            'awpb_template_id' => $this->awpb_template_id,
            'unit_cost' => $this->unit_cost,
            'mo_1' => $this->mo_1,
            'mo_2' => $this->mo_2,
            'mo_3' => $this->mo_3,
            'mo_4' => $this->mo_4,
            'mo_5' => $this->mo_5,
            'mo_6' => $this->mo_6,
            'mo_7' => $this->mo_7,
            'mo_8' => $this->mo_8,
            'mo_9' => $this->mo_9,
            'mo_10' => $this->mo_10,
            'mo_11' => $this->mo_11,
            'mo_12' => $this->mo_12,
            'quarter_one_quantity' => $this->quarter_one_quantity,
            'quarter_two_quantity' => $this->quarter_two_quantity,
            'quarter_three_quantity' => $this->quarter_three_quantity,
            'quarter_four_quantity' => $this->quarter_four_quantity,
            'total_quantity' => $this->total_quantity,
            'mo_1_amount' => $this->mo_1_amount,
            'mo_2_amount' => $this->mo_2_amount,
            'mo_3_amount' => $this->mo_3_amount,
            'mo_4_amount' => $this->mo_4_amount,
            'mo_5_amount' => $this->mo_5_amount,
            'mo_6_amount' => $this->mo_6_amount,
            'mo_7_amount' => $this->mo_7_amount,
            'mo_8_amount' => $this->mo_8_amount,
            'mo_9_amount' => $this->mo_9_amount,
            'mo_10_amount' => $this->mo_10_amount,
            'mo_11_amount' => $this->mo_11_amount,
            'mo_12_amount' => $this->mo_12_amount,
            'quarter_one_amount' => $this->quarter_one_amount,
            'quarter_two_amount' => $this->quarter_two_amount,
            'quarter_three_amount' => $this->quarter_three_amount,
            'quarter_four_amount' => $this->quarter_four_amount,
            'total_amount' => $this->total_amount,
            'status' => $this->status,
            'district_id' => $this->district_id,
            'province_id' => $this->province_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }

}
