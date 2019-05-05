<?php
include __DIR__ . "/../vendor/autoload.php";

use Buzzz\Api\Api;

$api = new Api();

$di = [
    "test_di" => "hello di"
];

$api->run($di);

