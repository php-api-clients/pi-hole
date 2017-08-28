<?php

declare(strict_types=1);

namespace ApiClients\Client\PiHole;

use ApiClients\Foundation\Hydrator\Options as HydratorOptions;
use ApiClients\Foundation\Options as FoundationOptions;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Middleware\HttpExceptions\HttpExceptionsMiddleware;
use ApiClients\Middleware\Json\JsonDecodeMiddleware;
use ApiClients\Middleware\UserAgent\Options as UserAgentMiddlewareOptions;
use ApiClients\Middleware\UserAgent\UserAgentMiddleware;
use ApiClients\Middleware\UserAgent\UserAgentStrategies;
use function ApiClients\Foundation\options_merge;

final class ApiSettings
{
    const NAMESPACE = 'ApiClients\\Client\\PiHole\\Resource';
    const TRANSPORT_OPTIONS = [
        FoundationOptions::HYDRATOR_OPTIONS => [
            HydratorOptions::NAMESPACE => self::NAMESPACE,
            HydratorOptions::NAMESPACE_DIR => __DIR__ . DIRECTORY_SEPARATOR . 'Resource' . DIRECTORY_SEPARATOR,
        ],
        FoundationOptions::TRANSPORT_OPTIONS => [
            TransportOptions::SCHEMA => 'http',
            TransportOptions::MIDDLEWARE => [
                HttpExceptionsMiddleware::class,
                UserAgentMiddleware::class,
                JsonDecodeMiddleware::class,
            ],
            TransportOptions::DEFAULT_REQUEST_OPTIONS => [
                UserAgentMiddleware::class => [
                    UserAgentMiddlewareOptions::STRATEGY => UserAgentStrategies::PACKAGE_VERSION,
                    UserAgentMiddlewareOptions::PACKAGE => 'api-clients/pi-hole',
                ],
            ],
        ],
    ];

    public static function getOptions(string $host, array $suppliedOptions, string $suffix): array
    {
        $options = options_merge(self::TRANSPORT_OPTIONS, $suppliedOptions);
        $options[FoundationOptions::TRANSPORT_OPTIONS][TransportOptions::HOST] = $host;
        $options[FoundationOptions::HYDRATOR_OPTIONS][HydratorOptions::NAMESPACE_SUFFIX] = $suffix;

        return $options;
    }
}
