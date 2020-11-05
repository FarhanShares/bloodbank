<?php

require 'Medoo.php';

use Medoo\Medoo;

$database = new Medoo([
    // required
    'database_type' => 'mysql',
    'database_name' => 'bloodbank',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',

    // [optional]
    // 'charset' => 'utf8mb4',
    // 'collation' => 'utf8mb4_general_ci',
    // 'port' => 3306,
]);
