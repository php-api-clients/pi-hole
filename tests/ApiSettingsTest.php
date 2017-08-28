<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\PiHoleApiClients\Tests\Skeleton;

use ApiClients\Client\PiHole\ApiSettings;
use ApiClients\Foundation\Hydrator\Options as HydratorOptions;
use ApiClients\Foundation\Options as FoundationOptions;
use ApiClients\Tools\TestUtilities\TestCase;
use ApiClients\Foundation\Transport\Options as TransportOptions;

final class ApiSettingsTest extends TestCase
{
    public function testGetOptions()
    {
        $options = ApiSettings::getOptions('host', [], 'Suffix');
        self::assertTrue(isset($options[FoundationOptions::HYDRATOR_OPTIONS][HydratorOptions::NAMESPACE_SUFFIX]));
        self::assertSame('Suffix', $options[FoundationOptions::HYDRATOR_OPTIONS][HydratorOptions::NAMESPACE_SUFFIX]);
        self::assertSame('host', $options[FoundationOptions::TRANSPORT_OPTIONS][TransportOptions::HOST]);
    }
}
