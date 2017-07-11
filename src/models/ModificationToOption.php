<?php
namespace dvizh\shop\models;

use Yii;
use dvizh\shop\Module;

class ModificationToOption extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return '{{%shop_product_modification_to_option}}';
    }

    public function rules()
    {
        return [
            [['modification_id', 'option_id'], 'required'],
            [['option_id', 'option_id', 'variant_id'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id'              => Module::t('shop','ID'),
            'modification_id' => Module::t('shop','Модификация'),
            'option_id'       => Module::t('shop','Опция'),
            'variant_id'      => Module::t('shop','Значение'),
        ];
    }
}
