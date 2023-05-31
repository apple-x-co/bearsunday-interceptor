<?php

declare(strict_types=1);

namespace MyVendor\MyProject\Logger;

use BEAR\AppMeta\AbstractAppMeta;
use DateTimeInterface;

class Logger implements LoggerInterface
{
    public function __construct(
        private readonly AbstractAppMeta $appMeta,
        private readonly DateTimeInterface $now,
    ) {
    }

    public function log(string $message): void
    {
        error_log(
            $this->now->format('Y-m-d H:i:s') . ' ' . $message . PHP_EOL,
            3,
            $this->appMeta->logDir . '/debug.log',
        );
    }
}
