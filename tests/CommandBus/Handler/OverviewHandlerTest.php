<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\PiHole\CommandBus\Handler;

use ApiClients\Client\PiHole\CommandBus\Command\OverviewCommand;
use ApiClients\Client\PiHole\CommandBus\Handler\OverviewHandler;
use ApiClients\Client\PiHole\Resource\OverviewInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use ApiClients\Tools\TestUtilities\TestCase;

final class OverviewHandlerTest extends TestCase
{
    public function testFetch()
    {
        $command = new OverviewCommand();
        $service = $this->prophesize(FetchAndHydrateService::class);
        $service->fetch('/admin/api.php', '', OverviewInterface::HYDRATE_CLASS)->shouldBeCalled();
        $handler = new OverviewHandler($service->reveal());
        $handler->handle($command);
    }
}
