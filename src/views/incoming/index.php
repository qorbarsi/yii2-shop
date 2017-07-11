<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use dvizh\shop\Module;

$this->title = Module::t('shop','Поступления');
$this->params['breadcrumbs'][] = ['label' => Module::t('shop','Магазин'), 'url' => ['/shop/default/index']];
$this->params['breadcrumbs'][] = $this->title;

\dvizh\shop\assets\BackendAsset::register($this);
?>
<div class="category-index">
    <div class="row">
        <div class="col-md-2">
            <?= Html::a(Module::t('shop','Создать поступление'), ['create'], ['class' => 'btn btn-success']) ?>
        </div>
        <div class="col-md-10">

        </div>
    </div>

    <?=\kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id', 'filter' => false, 'options' => ['style' => 'width: 55px;']],
            'product.name',
            'content',
            'amount',
            'price',
            [
                'attribute' => 'date',
                'value' => function($model) {
                    return date('d.m.Y H:i', $model->date);
                }
            ],
        ],
    ]);?>

</div>
