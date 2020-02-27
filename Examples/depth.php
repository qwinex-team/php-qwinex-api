<?php

require_once '../Api.php';
require_once '../vendor/autoload.php';

/*
 *  The endpoint of the public part of the API.
 *
 * */

$api = new Qwinex\Api();

$market = 'ETH_BTC';

$response = $api->depth($market);
print_r($response . PHP_EOL);