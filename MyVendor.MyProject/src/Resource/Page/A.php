<?php

declare(strict_types=1);

namespace MyVendor\MyProject\Resource\Page;

use BEAR\Resource\ResourceObject;
use MyVendor\MyProject\Annotation\AnnotationA;
use MyVendor\MyProject\Logger\LoggerInterface;

class A extends ResourceObject
{
    public function __construct(
        private readonly LoggerInterface $logger
    ) {
    }

    #[AnnotationA]
    public function onGet(): static
    {
        $this->logger->log(__CLASS__ . '::' . __METHOD__);

        return $this;
    }
}
