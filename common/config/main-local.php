<?php
//https://srv-hostalia.com/phpmyadmin/2698/index.php?db=&table=&server=521&target=&token=d046038018d124bec3c5a50b9ed888fd
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=mysql521int.srv-hostalia.com;dbname=db5210912_rebook',
            'username' => 'u5210912_rebook',
            'password' => 'xKolyxw5b',
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
