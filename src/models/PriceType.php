<?php
namespace dvizh\shop\models;

use yii;
use dvizh\shop\Module;

class PriceType extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return '{{%shop_price_type}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
            [['condition'], 'string'],
            [['sort'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id'        => Module::t('shop','ID'),
            'name'      => Module::t('shop','Название'),
            'sort'      => Module::t('shop','Сортировка'),
            'condition' => Module::t('shop','Условие'),
        ];
    }
}
