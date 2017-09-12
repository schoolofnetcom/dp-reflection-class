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

$user = $resolver->class($class, $dependencies);

echo $user->getName();
