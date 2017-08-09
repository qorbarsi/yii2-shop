<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use dvizh\shop\models\Category;
use dvizh\gallery\widgets\Gallery;
use kartik\select2\Select2;
use dvizh\seo\widgets\SeoForm;
use dvizh\shop\Module;

?>

<div class="category-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'slug')->textInput(['placeholder' => Module::t('shop','Не обязательно')]) ?>

	<?= $form->field($model, 'sort')->textInput() ?>

    <?php echo $form->field($model, 'text')->widget(
        \yii\imperavi\Widget::className(),
        [
            'plugins' => ['fullscreen', 'fontcolor', 'video'],
            'options'=>[
                'minHeight' => 400,
                'maxHeight' => 400,
                'buttonSource' => true,
                'imageUpload' => Url::toRoute(['tools/upload-imperavi'])
            ]
        ]
    ) ?>

    <?= $form->field($model, 'parent_id')
            ->widget(Select2::classname(), [
                'data' => Category::buildTextTree(null, 1, [$model->id]),
                //'language' => 'ru',
                'options' => ['placeholder' => Module::t('shop','Выберите категорию ...')],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>

    <?=Gallery::widget(['model' => $model, 'label' => Module::t('shop','Изображения')]);?>

    <?=\dvizh\seo\widgets\SeoForm::widget([
        'model' => $model,
        'form' => $form,
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Module::t('shop','Создать') : Module::t('shop','Изменить'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
