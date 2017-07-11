<?php
use yii\helpers\Html;
use dvizh\shop\Module;

$this->title = Module::t('shop','Создать категорию');
$this->params['breadcrumbs'][] = ['label' => Module::t('shop','Категории'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\dvizh\shop\assets\BackendAsset::register($this);
?>
<div class="category-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
