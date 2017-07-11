<?php
namespace dvizh\shop\models;

use Yii;
use yii\helpers\Url;
use yii\db\ActiveQuery;
use dvizh\shop\Module;

class StockToProduct extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return '{{%shop_stock_to_product}}';
    }

    public function rules()
    {
        return [
            [['product_id', 'stock_id', 'amount'], 'required'],
            [['product_id', 'stock_id', 'amount'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id'      => Module::t('shop','ID'),
            'address' => Module::t('shop','Адрес'),
            'name'    => Module::t('shop','Название'),
            'text'    => Module::t('shop','Текст'),
        ];
    }
}
