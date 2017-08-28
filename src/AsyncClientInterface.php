<?php

declare(strict_types=1);

namespace ApiClients\Client\PiHole;

use React\Promise\PromiseInterface;

interface AsyncClientInterface
{
    public function overview(): PromiseInterface;
}
