<?php declare(strict_types=1);

use ApiClients\Client\PiHole\AsyncClient;
use ApiClients\Client\PiHole\Resource\OverviewInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_host.php');

$client->overview()->done(function (OverviewInterface $overview) {
    resource_pretty_print($overview);
});

$loop->run();
