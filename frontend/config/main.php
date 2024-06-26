<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'layout' => 'main',
    'controllerNamespace' => 'frontend\controllers',

    'homeUrl' => '/',

    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [

                //['class' => 'frontend\components\ClassUrlRule'],
                '' => 'site/index',
                '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',


                // 'site' => 'site/index',
                // '/site/captcha' => 'site/captcha',
                // 'contact' => 'site/contact',
                // '/site/captcha' => 'site/captcha',

                //Прописываем роуты
                //'/' => 'site/login',
                //'/index' => 'site/login',
                //'<action>' => '<action>',

            ],
        ],
    ],
    'params' => $params,
];
