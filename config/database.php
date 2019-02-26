<?php 

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'sqlsrv',
    'host' => 'localhost',
    'database' => 'crudphp',
    'username' => 'SA',
    'password' => 'Watchman347',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode-ci',
    'prefix' => '',
    'pooling' => false,
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();