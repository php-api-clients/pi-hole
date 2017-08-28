<?php declare(strict_types=1);

namespace ApiClients\Client\PiHole\Resource\Sync;

use ApiClients\Client\PiHole\Resource\Overview as BaseOverview;
use ApiClients\Client\PiHole\Resource\OverviewInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Overview extends BaseOverview
{
    public function refresh(): Overview
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (OverviewInterface $overview) {
            return $overview->refresh();
        }));
    }
}
