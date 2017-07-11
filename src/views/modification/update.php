<?php
use yii\helpers\Html;
use yii\grid\GridView;
use dvizh\shop\Module;

$this->title = Html::encode($model->name);

$this->params['breadcrumbs'][] = ['label' => Module::t('shop','Товары'), 'url' => ['/shop/product/index']];
$this->params['breadcrumbs'][] = ['label' => $productModel->name, 'url' => ['/shop/product/update', 'id' => $productModel->id]];
$this->params['breadcrumbs'][] = Module::t('shop','Модификация');
$this->params['breadcrumbs'][] = Module::t('shop','Обновить');

\dvizh\shop\assets\ModificationConstructAsset::register($this);
?>
<div class="product-modification-update">
    <div class="row">
        <div class="col-lg-12">
            <?= $this->render('_form', [
                'model' => $model,
                'productModel' => $productModel,
                'module' => $module,
            ]) ?>
        </div>
    </div>
</div>
