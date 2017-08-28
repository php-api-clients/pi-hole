# Async first Pi-Hole API Client for PHP 7

[![Build Status](https://travis-ci.org/php-api-clients/pi-hole.svg?branch=master)](https://travis-ci.org/php-api-clients/pi-hole)
[![Latest Stable Version](https://poser.pugx.org/api-clients/pi-hole/v/stable.png)](https://packagist.org/packages/api-clients/pi-hole)
[![Total Downloads](https://poser.pugx.org/api-clients/pi-hole/downloads.png)](https://packagist.org/packages/api-clients/pi-hole)
[![Code Coverage](https://scrutinizer-ci.com/g/php-api-clients/pi-hole/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/php-api-clients/pi-hole/?branch=master)
[![License](https://poser.pugx.org/api-clients/pi-hole/license.png)](https://packagist.org/packages/api-clients/pi-hole)
[![PHP 7 ready](http://php7ready.timesplinter.ch/php-api-clients/pi-hole/badge.svg)](https://pi-hole-ci.org/php-api-clients/pi-hole)

# Install

To install via [Composer](http://getcomposer.org/), use the command below, it will automatically detect the latest version and bind it with `^`.

```
composer require api-clients/pi-hole
```

# Usage

The client needs two things, the ReactPHP event loop, and your PI Hole's hostname. Once you created the client you can call the `overview` method to get to stats as shown on the dashboard.

```php
use ApiClients\Client\PiHole\AsyncClient;
use ApiClients\Client\PiHole\Resource\OverviewInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, 'pi-hole.local');

$client->overview()->done(function (OverviewInterface $overview) {
    resource_pretty_print($overview);
});

$loop->run();
```

# Examples

The [`examples`](https://github.com/php-api-clients/pi-hole/tree/master/examples) directory is filled with all kinds of examples for this package.

# License

The MIT License (MIT)

Copyright (c) 2017 Cees-Jan Kiewiet

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
