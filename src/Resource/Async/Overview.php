<?php declare(strict_types=1);

namespace ApiClients\Client\PiHole\Resource\Async;

use ApiClients\Client\PiHole\Resource\Overview as BaseOverview;

class Overview extends BaseOverview
{
    public function refresh(): Overview
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
