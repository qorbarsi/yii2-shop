<?php
use yii\helpers\Html;
use dvizh\shop\Module;

$this->title = Module::t('shop','Создать тип цен');
$this->params['breadcrumbs'][] = ['label' => Module::t('shop','Типы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\dvizh\shop\assets\BackendAsset::register($this);
?>
<div class="price-type-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
