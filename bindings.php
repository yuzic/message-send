<?php

$container = new Di\Container;

/** @var Service\Mail\MailService $container->mailService */
$container->mailService  = function($c) {
	 $params = [
        'host' => 'madnirll',
        'port' => 5672,
        'login' => 'guest',
        'password'  => 'guest'
    ];

    $config = new App\Configuration\ArrayConfig($params);
    
    $mandill = new  Service\Mail\Providers\Manrill($config);

    return new Service\Mail\MailService($mandill);
};
