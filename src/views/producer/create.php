<?php
use dvizh\shop\Module;

$this->title = Module::t('shop','Создать производителя');
$this->params['breadcrumbs'][] = ['label' => Module::t('shop','Производители'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\dvizh\shop\assets\BackendAsset::register($this);
?>
<div class="producer-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
