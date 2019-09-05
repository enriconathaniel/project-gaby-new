<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ms_product".
 *
 * @property int $productID
 * @property string $productName
 * @property int $stockQty
 * @property double $price
 */
class MsProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ms_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['productName', 'stockQty', 'price'], 'required'],
            [['stockQty'], 'integer'],
            [['price'], 'number'],
            [['productName'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'productID' => 'Product ID',
            'productName' => 'Product Name',
            'stockQty' => 'Stock Qty',
            'price' => 'Price',
        ];
    }
}
