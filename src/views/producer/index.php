<?php

use yii\helpers\Html;
use kartik\export\ExportMenu;
use dvizh\shop\Module;

$this->title = Module::t('shop','Производители');
$this->params['breadcrumbs'][] = ['label' => Module::t('shop','Магазин'), 'url' => ['/shop/default/index']];
$this->params['breadcrumbs'][] = $this->title;

\dvizh\shop\assets\BackendAsset::register($this);
?>
<div class="producer-index">

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
            <?= Html::a(Module::t('shop','Создать производителя'), ['create'], ['class' => 'btn btn-success']) ?>
        </div>
        <div class="col-md-4">
            <?php
            $gridColumns = [
                'id',
                'name',
            ];

            echo ExportMenu::widget([
                'dataProvider' => $dataProvider,
                'columns' => $gridColumns
            ]);
            ?>
        </div>
    </div>

    <br style="clear: both;"></div>

    <?= \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => '\kartik\grid\CheckboxColumn'],
            ['attribute' => 'id', 'filter' => false, 'options' => ['style' => 'width: 55px;']],

            'name',
            [
				'attribute' => 'image',
				'format' => 'image',
                'filter' => false,
				'content' => function ($image) {
                    if($image = $image->getImage()->getUrl('50x50')) {
                        return "<img src=\"{$image}\" class=\"thumb\" />";
                    }
				}
			],

            ['class' => 'yii\grid\ActionColumn', 'template' => '{update} {delete}']
        ],
    ]); ?>

</div>
