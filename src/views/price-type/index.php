<?php
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\export\ExportMenu;
use dvizh\shop\Module;

$this->title = Module::t('shop','Типы цен');
$this->params['breadcrumbs'][] = ['label' => Module::t('shop','Магазин'), 'url' => ['/shop/default/index']];
$this->params['breadcrumbs'][] = $this->title;

\dvizh\shop\assets\BackendAsset::register($this);
?>
<div class="price-type-index">

    <div class="row">
        <div class="col-md-1">
            <?= Html::tag('button', Module::t('shop','Удалить'), [
                'class' => 'btn btn-success dvizh-mass-delete',
                'disabled' => 'disabled',
                'data' => [
                    'model' => $dataProvider->query->modelClass,
                ],
            ]) ?>
        </div>
        <div class="col-md-2">
            <?= Html::a(Module::t('shop','Добавить новый тип'), ['create'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?= \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => '\kartik\grid\CheckboxColumn'],
            ['attribute' => 'id', 'filter' => false, 'options' => ['style' => 'width: 55px;']],

            'name',
            'sort',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{update} {delete}']
        ],
    ]); ?>

</div>
