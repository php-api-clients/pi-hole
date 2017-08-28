<?php declare(strict_types=1);

namespace ApiClients\Client\PiHole\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyOverview implements OverviewInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function adsBlockedToday(): int
    {
        return null;
    }

    /**
     * @return float
     */
    public function adsPercentageToday(): float
    {
        return null;
    }

    /**
     * @return int
     */
    public function dnsQueriesToday(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function domainsBeingBlocked(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function queriesCached(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function queriesForwarded(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function uniqueDomains(): int
    {
        return null;
    }
}
