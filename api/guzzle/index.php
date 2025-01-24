<?php
require_once __DIR__ . '/../../vendor/autoload.php';

$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://vercel-php-six-kohl.vercel.app/api/sample_json/');

return $res;
