<?php

declare(strict_types=1);

namespace MyVendor\MyProject\Logger;

interface LoggerInterface
{
    public function log(string $message): void;
}
