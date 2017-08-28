<?php declare(strict_types=1);

namespace ApiClients\Client\PiHole\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyOverview")
 */
abstract class Overview extends AbstractResource implements OverviewInterface
{
    /**
     * @var int
     */
    protected $ads_blocked_today;

    /**
     * @var float
     */
    protected $ads_percentage_today;

    /**
     * @var int
     */
    protected $dns_queries_today;

    /**
     * @var int
     */
    protected $domains_being_blocked;

    /**
     * @var int
     */
    protected $queries_cached;

    /**
     * @var int
     */
    protected $queries_forwarded;

    /**
     * @var int
     */
    protected $unique_domains;

    /**
     * @return int
     */
    public function adsBlockedToday(): int
    {
        return $this->ads_blocked_today;
    }

    /**
     * @return float
     */
    public function adsPercentageToday(): float
    {
        return $this->ads_percentage_today;
    }

    /**
     * @return int
     */
    public function dnsQueriesToday(): int
    {
        return $this->dns_queries_today;
    }

    /**
     * @return int
     */
    public function domainsBeingBlocked(): int
    {
        return $this->domains_being_blocked;
    }

    /**
     * @return int
     */
    public function queriesCached(): int
    {
        return $this->queries_cached;
    }

    /**
     * @return int
     */
    public function queriesForwarded(): int
    {
        return $this->queries_forwarded;
    }

    /**
     * @return int
     */
    public function uniqueDomains(): int
    {
        return $this->unique_domains;
    }
}
