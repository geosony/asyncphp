<?php

declare(strict_types=1);

namespace Code;

define('ROOT_PATH', dirname(__FILE__));
define('SCRIPT_PATH', ROOT_PATH);

require  ROOT_PATH . '/vendor/autoload.php';

use hollodotme\FastCGI\Client;
use hollodotme\FastCGI\Requests\PostRequest;
use hollodotme\FastCGI\SocketConnections\NetworkSocket;
#use hollodotme\FastCGI\SocketConnections\UnixDomainSocket;

$client     = new Client();

#$connection = new UnixDomainSocket(
#    '/var/run/php/php7.4-fpm.sock',     # Socket path
#    5000,                               # Connect timeout in milliseconds (default: 5000)
#    5000                                # Read/write timeout in milliseconds (default: 5000)
#);



$connection = new NetworkSocket('127.0.0.1', 9000);
$content    = http_build_query(['key' => 'value', 'sleep' => '5']);
$request    = new PostRequest(SCRIPT_PATH .  '/command.php', $content);

#$response = $client->sendRequest($connection, $request);
#echo $response->getBody();

$socketId = $client->sendAsyncRequest($connection, $request);
echo "Request sent, got ID: {$socketId}";


function stop($var, $e=1) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if ($e) exit;
}
