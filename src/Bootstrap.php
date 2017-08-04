<?php
namespace dvizh\shop;

use yii\base\BootstrapInterface;
use yii;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        if(!$app->has('shop')) {
            $app->set('shop', ['class' => 'dvizh\shop\Shop']);
        }

        if (!isset($app->i18n->translations['dvizh/shop'])) {
            $app->i18n->translations['dvizh/shop'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'ru',
                'basePath' => __DIR__.'/messages',
                'fileMap' => [
                    'dvizh/shop' => 'shop.php',
                ],
            ];
        }

    }
}
