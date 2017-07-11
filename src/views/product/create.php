<?php
use yii\helpers\Html;
use dvizh\shop\Module;

$this->title = Module::t('shop','Добавить товар');
$this->params['breadcrumbs'][] = ['label' => Module::t('shop','Товары'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\dvizh\shop\assets\BackendAsset::register($this);
?>
<div class="product-create">

    <?= $this->render('_form', [
        'model' => $model,
        'priceTypes' => $priceTypes,
        'priceModel' => $priceModel,
    ]) ?>

</div>
