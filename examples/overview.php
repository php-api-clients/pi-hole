<?php declare(strict_types=1);

use ApiClients\Client\PiHole\Client;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$client = Client::create(require 'resolve_host.php');

$overview = $client->overview();
resource_pretty_print($overview);
