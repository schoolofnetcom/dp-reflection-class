<?php

require 'vendor/autoload.php';

$resolver = new ErikFig\Resolver;

$class = \ErikFig\Model\User::class;
$dependencies = [
    'dsn'=>'mysql:host=localhost;dbname=phpixie',
    'username'=>'root',
    'passwd'=> 1234,
    'options' => []
];

$myMethod = require 'router.php';

echo $resolver->method($myMethod, $dependencies);
