<?php declare(strict_types=1);

namespace ApiClients\Client\PiHole\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface OverviewInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Overview';

    /**
     * @return int
     */
    public function adsBlockedToday(): int;

    /**
     * @return float
     */
    public function adsPercentageToday(): float;

    /**
     * @return int
     */
    public function dnsQueriesToday(): int;

    /**
     * @return int
     */
    public function domainsBeingBlocked(): int;

    /**
     * @return int
     */
    public function queriesCached(): int;

    /**
     * @return int
     */
    public function queriesForwarded(): int;

    /**
     * @return int
     */
    public function uniqueDomains(): int;
}
