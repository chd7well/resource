<?php

namespace chd7well\resource\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use chd7well\resource\models\Partner;

/**
 * PartnerSearch represents the model behind the search form about `chd7well\resource\models\Partner`.
 */
class PartnerSearch extends Partner
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'title_ID', 'country_ID', 'active', 'parent_ID', 'is_customer', 'is_supplier', 'is_company', 'vat_subjected', 'is_employee', 'is_petowner'], 'integer'],
            [['partnername', 'givenname', 'surename', 'street', 'zip', 'city', 'email', 'website', 'phone', 'comment', 'language', 'customer_number', 'supplier_number', 'vat', 'vat_checked', 'employee_number'], 'safe'],
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
        $query = Partner::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ID' => $this->ID,
            'title_ID' => $this->title_ID,
            'country_ID' => $this->country_ID,
            'active' => $this->active,
            'parent_ID' => $this->parent_ID,
            'is_customer' => $this->is_customer,
            'is_supplier' => $this->is_supplier,
            'is_company' => $this->is_company,
            'vat_subjected' => $this->vat_subjected,
            'vat_checked' => $this->vat_checked,
            'is_employee' => $this->is_employee,
            'is_petowner' => $this->is_petowner,
        ]);

        $query->andFilterWhere(['like', 'partnername', $this->partnername])
            ->andFilterWhere(['like', 'givenname', $this->givenname])
            ->andFilterWhere(['like', 'surename', $this->surename])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'zip', $this->zip])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'customer_number', $this->customer_number])
            ->andFilterWhere(['like', 'supplier_number', $this->supplier_number])
            ->andFilterWhere(['like', 'vat', $this->vat])
            ->andFilterWhere(['like', 'employee_number', $this->employee_number]);

        return $dataProvider;
    }
}
