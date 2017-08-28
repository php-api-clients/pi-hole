<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\PiHole\Resource\Async;

use ApiClients\Client\PiHole\Resource\Async\EmptyOverview;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

final class EmptyOverviewTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyOverview::class;
    }
}
