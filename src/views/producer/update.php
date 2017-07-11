<?php
use yii\helpers\Html;
use dvizh\shop\Module;

$this->title = Module::t('shop','Обновить производителя: {name}', ['name' => $model->name]);
$this->params['breadcrumbs'][] = ['label' => Module::t('shop','Производители'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Module::t('shop','Обновить');
\dvizh\shop\assets\BackendAsset::register($this);
?>
<div class="producer-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?php if($fieldPanel = \dvizh\field\widgets\Choice::widget(['model' => $model])) { ?>
        <div class="block">
            <h2><?= Module::t('shop','Прочее') ?></h2>
            <?=$fieldPanel;?>
        </div>
    <?php } ?>

</div>
