<?php
require_once __DIR__ . '/../../vendor/autoload.php';

$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://jsonplaceholder.typicode.com/todos/1');

header("Content-Type: application/json; charset=utf-8");
echo $res->getBody();
