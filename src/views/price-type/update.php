<?php
use yii\helpers\Html;
use dvizh\shop\Module;

$this->title = Module::t('shop','Обновить тип цен: {name}' , ['name' => $model->name]);
$this->params['breadcrumbs'][] = ['label' => Module::t('shop','Типы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Module::t('shop','Обновить');
\dvizh\shop\assets\BackendAsset::register($this);
?>
<div class="price-type-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
