<?php
namespace dvizh\shop\models;

use Yii;
use yii\helpers\Url;
use yii\db\ActiveQuery;
use dvizh\shop\Module;

class StockToUser extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return '{{%shop_stock_to_user}}';
    }

    public function rules()
    {
        return [
            [['user_id', 'stock_id'], 'required'],
            [['user_id', 'stock_id'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id'       => Module::t('shop','ID'),
            'user_id'  => Module::t('shop','Пользователь'),
            'stock_id' => Module::t('shop','Склад'),
        ];
    }
}
