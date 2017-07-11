<?php
namespace dvizh\shop\models;

use yii\helpers\Url;
use Yii;
use dvizh\shop\Module;

class Producer extends \yii\db\ActiveRecord
{
    function behaviors() {
        return [
            'images' => [
                'class' => 'dvizh\gallery\behaviors\AttachImages',
                'mode' => 'single',
            ],
            'slug' => [
                'class' => 'Zelenin\yii\behaviors\Slug',
            ],
            'seo' => [
                'class' => 'dvizh\seo\behaviors\SeoFields',
            ],
            'field' => [
                'class' => 'dvizh\field\behaviors\AttachFields',
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shop_producer}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['image', 'text'], 'string'],
            [['name', 'slug'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'    => Module::t('shop','ID'),
            'name'  => Module::t('shop','Название производителя'),
            'text'  => Module::t('shop','Описание'),
            'image' => Module::t('shop','Картинка'),
            'slug'  => Module::t('shop','SEO имя'),
        ];
    }

     public function getLink() {
        return Url::toRoute(['/producer/view/', 'slug' => $this->slug]);
    }


    public function getByProducts($productFind)
    {
        $return = new Producer;
        $productFind = $productFind->select('producer_id');
        return $return::find()->where(['id' => $productFind]);
    }
}
