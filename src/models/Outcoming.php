<?php
namespace dvizh\shop\models;

use Yii;
use dvizh\shop\Module;

class Outcoming extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return '{{%shop_outcoming}}';
    }

    public function rules()
    {
        return [
            [['stock_id', 'product_id'], 'required'],
            [['date', 'stock_id', 'product_id', 'user_id', 'order_id', 'count'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id'      => Module::t('shop','ID'),
            'date'    => Module::t('shop','Дата'),
            'content' => Module::t('shop','Содержание заказа'),
        ];
    }
}
