<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\PiHole\Resource\Async;

use ApiClients\Client\PiHole\ApiSettings;
use ApiClients\Client\PiHole\Resource\Overview;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class OverviewTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Overview::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
