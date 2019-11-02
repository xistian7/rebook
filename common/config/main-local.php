<?php
return [
    'components' => [
        'db' => [
            /*'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=mysql521int.srv-hostalia.com;dbname=db5210912_rebook',
            'username' => 'u5210912_rebook',
            'password' => 'xKolyxw5b',
            'charset' => 'utf8',*/
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=rebook',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
