<?php
namespace dvizh\shop\models;

use Yii;
use dvizh\shop\Module;

class Incoming extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return '{{%shop_incoming}}';
    }

    public function rules()
    {
        return [
            [['content'], 'string'],
            [['price'], 'double'],
            [['product_id', 'amount'], 'integer'],
        ];
    }

    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    public function attributeLabels()
    {
        return [
            'id'         => Module::t('shop','ID'),
            'date'       => Module::t('shop','Дата'),
            'product_id' => Module::t('shop','Товар'),
            'amount'     => Module::t('shop','Кол-во'),
            'price'      => Module::t('shop','Цена'),
            'content'    => Module::t('shop','Комментарий'),
        ];
    }
}
