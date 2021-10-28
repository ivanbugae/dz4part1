<?php
use GuzzleHttp\Client;
require '/home/ivan/guzzle/vendor/autoload.php';
$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://itea.ua/');
echo $res->getStatusCode();
echo $res->getBody();
?>
