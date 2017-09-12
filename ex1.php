<?php

require 'vendor/autoload.php';

use ErikFig\Database\Connection;
use ErikFig\Model\User;

$dependencies = [
    'dsn'=>'mysql:host=localhost;dbname=phpixie',
    'username'=>'root',
    'passwd'=> 1234,
    'options' => []
];

$pdo = new PDO($dependencies['dsn'], $dependencies['username'], $dependencies['passwd'], $dependencies['options']);
$connection = new Connection($pdo);
$user = new User($connection);

echo $user->getName();
