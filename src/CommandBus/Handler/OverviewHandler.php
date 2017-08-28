<?php declare(strict_types=1);

namespace ApiClients\Client\PiHole\CommandBus\Handler;

use ApiClients\Client\PiHole\CommandBus\Command\OverviewCommand;
use ApiClients\Client\PiHole\Resource\OverviewInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;

final class OverviewHandler
{
    /**
     * @var FetchAndHydrateService
     */
    private $service;

    /**
     * @param FetchAndHydrateService $service
     */
    public function __construct(FetchAndHydrateService $service)
    {
        $this->service = $service;
    }

    /**
     * Fetch the given repository and hydrate it.
     *
     * @param  OverviewCommand  $command
     * @return PromiseInterface
     */
    public function handle(OverviewCommand $command): PromiseInterface
    {
        return $this->service->fetch('/admin/api.php', '', OverviewInterface::HYDRATE_CLASS);
    }
}
