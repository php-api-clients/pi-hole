<?php declare(strict_types=1);

$hostFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'host.php';

if (!file_exists($hostFile)) {
    echo 'No key file find, copy host.sample.php to host.php and set your host in it.', PHP_EOL;
    exit(1);
}

return require $hostFile;
