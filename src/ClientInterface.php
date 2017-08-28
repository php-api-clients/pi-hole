<?php declare(strict_types=1);

namespace ApiClients\Client\PiHole;

use ApiClients\Client\PiHole\Resource\Sync\Overview;

interface ClientInterface
{
    public function overview(): Overview;
}
