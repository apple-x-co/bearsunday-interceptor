<?php

declare(strict_types=1);

namespace MyVendor\MyProject\Interceptor;

use BEAR\Resource\ResourceObject;
use Koriym\HttpConstants\StatusCode;
use MyVendor\MyProject\Logger\LoggerInterface;
use Ray\Aop\MethodInterceptor;
use Ray\Aop\MethodInvocation;

class InterceptorRedirect implements MethodInterceptor
{
    public function __construct(
        private readonly LoggerInterface $logger
    ) {
    }

    public function invoke(MethodInvocation $invocation): mixed
    {
        $this->logger->log(__CLASS__ . '::' . __METHOD__);

        $ro = $invocation->getThis();
        assert($ro instanceof ResourceObject);
        $ro->code = StatusCode::FOUND;
        $ro->headers = ['Location' => '/'];

        return $ro;
    }
}
