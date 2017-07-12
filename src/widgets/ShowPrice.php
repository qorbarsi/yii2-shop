<?php
namespace dvizh\shop\widgets;

use yii\helpers\Html;
use yii\helpers\Url;
use yii;

class ShowPrice extends \yii\base\Widget
{
    public $model = NULL;
    public $htmlTag = 'span';
    public $cssClass = '';
    public $templateOldNew = '{oldPrice} {price}';
    public $cssClassOldNew = 'discount';
    public $template = '{price}';
    public $currency = '';

    public function init()
    {
        \dvizh\shop\assets\WidgetAsset::register($this->getView());

        return parent::init();
    }

    public function run()
    {
        $js = 'dvizh.modificationconstruct.dvizhShopUpdatePriceUrl = "' .Url::toRoute(['/shop/tools/get-modification-by-options']). '";';

        $this->getView()->registerJs($js);

        $oldPrice = $this->model->getOldPrice();

        $oldNew = !empty($this->templateOldNew) && !empty($oldPrice);

        $this->template = $oldNew ? $this->templateOldNew : $this->template;
        $this->cssClass = $oldNew ? $this->cssClass." ".$this->cssClassOldNew : $this->cssClass;

        return Html::tag(
                $this->htmlTag,
                strtr($this->template, ['{oldPrice}' => $oldPrice.$this->currency, '{price}' => $this->model->getPrice().$this->currency ]),
                ['class' => "dvizh-shop-price dvizh-shop-price-{$this->model->id} {$this->cssClass}"]
            );
    }
}
