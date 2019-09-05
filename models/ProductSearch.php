<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MsProduct;

/**
 * ProductSearch represents the model behind the search form of `app\models\MsProduct`.
 */
class ProductSearch extends MsProduct
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['productID', 'stockQty'], 'integer'],
            [['productName'], 'safe'],
            [['price'], 'number'],
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
        $query = MsProduct::find();

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
            'productID' => $this->productID,
            'stockQty' => $this->stockQty,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'productName', $this->productName]);

        return $dataProvider;
    }
}
