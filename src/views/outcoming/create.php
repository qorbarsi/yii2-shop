<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use dvizh\shop\Module;

$this->title = Module::t('shop','Новое отправление');
$this->params['breadcrumbs'][] = $this->title;

dvizh\shop\assets\CreateOutcomingAsset::register($this);
\dvizh\shop\assets\BackendAsset::register($this);
?>

<div class="incoming-create">
    <?php if(Yii::$app->session->hasFlash('success')) { ?>
        <div class="alert alert-success" role="alert">
            <?= Yii::$app->session->getFlash('success') ?>
        </div>
    <?php } ?>

    <?php $form = ActiveForm::begin(); ?>
        <div class="form-group">
            <input class="new-input" data-info-service="<?=Url::toRoute(['/shop/product/product-info']);?>" type="text" value="" placeholder="<?= Module::t('shop','Код или артикул + Enter') ?>" style="width: 300px;" />
        </div>
        <div id="incoming-list" style="width: 800px;">
        </div>

        <div class="form-group">
            <?= Html::submitButton(Module::t('shop','Добавить отправление'), ['class' => 'btn btn-success']) ?>
        </div>
    <?php ActiveForm::end(); ?>
</div>
