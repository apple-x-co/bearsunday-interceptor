<?php

declare(strict_types=1);

namespace MyVendor\MyProject\Interceptor;

use MyVendor\MyProject\Logger\LoggerInterface;
use Ray\Aop\MethodInterceptor;
use Ray\Aop\MethodInvocation;

class InterceptorD implements MethodInterceptor
{
    public function __construct(
        private readonly LoggerInterface $logger
    ) {
    }

    public function invoke(MethodInvocation $invocation): mixed
    {
        $this->logger->log(__CLASS__ . '::' . __METHOD__ . ' (before)');

        $ro = $invocation->proceed();

        $this->logger->log(__CLASS__ . '::' . __METHOD__ . ' (after)');

        return $ro;
    }
}
