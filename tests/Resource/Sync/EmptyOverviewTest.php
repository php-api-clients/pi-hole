<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\PiHole\Resource\Sync;

use ApiClients\Client\PiHole\Resource\Sync\EmptyOverview;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

final class EmptyOverviewTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyOverview::class;
    }
}
