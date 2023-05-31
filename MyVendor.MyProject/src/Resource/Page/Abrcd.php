<?php

declare(strict_types=1);

namespace MyVendor\MyProject\Resource\Page;

use BEAR\Resource\ResourceObject;
use MyVendor\MyProject\Annotation\AnnotationA;
use MyVendor\MyProject\Annotation\AnnotationB;
use MyVendor\MyProject\Annotation\AnnotationC;
use MyVendor\MyProject\Annotation\AnnotationD;
use MyVendor\MyProject\Annotation\AnnotationReturn;
use MyVendor\MyProject\Logger\LoggerInterface;

class Abrcd extends ResourceObject
{
    public function __construct(
        private readonly LoggerInterface $logger
    ) {
    }

    #[AnnotationA]
    #[AnnotationB]
    #[AnnotationReturn]
    #[AnnotationC]
    #[AnnotationD]
    public function onGet(): static
    {
        $this->logger->log(__CLASS__ . '::' . __METHOD__);

        return $this;
    }
}
