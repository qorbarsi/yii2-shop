<?php
use yii\helpers\Url;
use dvizh\shop\Module;

$this->title = Module::t('shop','Магазин');
$this->params['breadcrumbs'][] = $this->title;

\dvizh\shop\assets\BackendAsset::register($this);

?>
<div class="model-index">
    <table class="table">
        <tr>
            <th><?= Module::t('shop','Товары') ?></th>
            <td>
                <a href="<?=Url::toRoute(['/shop/product/index']);?>" class="btn btn-default"><i class="glyphicon glyphicon-eye-open" /></i></a>
                <a href="<?=Url::toRoute(['/shop/product/create']);?>" class="btn btn-default"><i class="glyphicon glyphicon-plus" /></i></a>
            </td>
        </tr>
        <tr>
            <th><?= Module::t('shop','Типы цен') ?></th>
            <td>
                <a href="<?=Url::toRoute(['/shop/price-type/index']);?>" class="btn btn-default"><i class="glyphicon glyphicon-eye-open" /></i></a>
                <a href="<?=Url::toRoute(['/shop/price-type/create']);?>" class="btn btn-default"><i class="glyphicon glyphicon-plus" /></i></a>
            </td>
        </tr>
        <tr>
            <th><?= Module::t('shop','Категории') ?></th>
            <td>
                <a href="<?=Url::toRoute(['/shop/category/index']);?>" class="btn btn-default"><i class="glyphicon glyphicon-eye-open" /></i></a>
                <a href="<?=Url::toRoute(['/shop/category/create']);?>" class="btn btn-default"><i class="glyphicon glyphicon-plus" /></i></a>
            </td>
        </tr>
        <tr>
            <th><?= Module::t('shop','Поступление') ?></th>
            <th>
                <a href="<?=Url::toRoute(['/shop/incoming/index']);?>" class="btn btn-default"><i class="glyphicon glyphicon-eye-open" /></i></a>
                <a href="<?=Url::toRoute(['/shop/incoming/create']);?>" class="btn btn-default"><i class="glyphicon glyphicon-plus" /></i></a>
            </th>
        </tr>
    </table>
</div>
