<?php

declare(strict_types=1);

namespace MyVendor\MyProject\Module;

use BEAR\Dotenv\Dotenv;
use BEAR\Package\AbstractAppModule;
use BEAR\Package\PackageModule;
use BEAR\Resource\ResourceObject;
use DateTimeInterface;
use DateTimeImmutable;
use MyVendor\MyProject\Annotation\AnnotationA;
use MyVendor\MyProject\Annotation\AnnotationB;
use MyVendor\MyProject\Annotation\AnnotationC;
use MyVendor\MyProject\Annotation\AnnotationD;
use MyVendor\MyProject\Annotation\AnnotationRedirect;
use MyVendor\MyProject\Annotation\AnnotationReturn;
use MyVendor\MyProject\Interceptor\InterceptorA;
use MyVendor\MyProject\Interceptor\InterceptorB;
use MyVendor\MyProject\Interceptor\InterceptorC;
use MyVendor\MyProject\Interceptor\InterceptorD;
use MyVendor\MyProject\Interceptor\InterceptorRedirect;
use MyVendor\MyProject\Interceptor\InterceptorReturn;
use MyVendor\MyProject\Logger\Logger;
use MyVendor\MyProject\Logger\LoggerInterface;

use function dirname;

class AppModule extends AbstractAppModule
{
    protected function configure(): void
    {
        $this->bind(DateTimeInterface::class)->to(DateTimeImmutable::class);
        $this->bind(LoggerInterface::class)->to(Logger::class);

        $this->bindInterceptor(
            $this->matcher->subclassesOf(ResourceObject::class),
            $this->matcher->annotatedWith(AnnotationA::class),
            [InterceptorA::class],
        );

        $this->bindInterceptor(
            $this->matcher->subclassesOf(ResourceObject::class),
            $this->matcher->annotatedWith(AnnotationB::class),
            [InterceptorB::class],
        );

        $this->bindInterceptor(
            $this->matcher->subclassesOf(ResourceObject::class),
            $this->matcher->annotatedWith(AnnotationC::class),
            [InterceptorC::class],
        );

        $this->bindInterceptor(
            $this->matcher->subclassesOf(ResourceObject::class),
            $this->matcher->annotatedWith(AnnotationD::class),
            [InterceptorD::class],
        );

        $this->bindInterceptor(
            $this->matcher->subclassesOf(ResourceObject::class),
            $this->matcher->annotatedWith(AnnotationReturn::class),
            [InterceptorReturn::class],
        );

        $this->bindInterceptor(
            $this->matcher->subclassesOf(ResourceObject::class),
            $this->matcher->annotatedWith(AnnotationRedirect::class),
            [InterceptorRedirect::class],
        );

        (new Dotenv())->load(dirname(__DIR__, 2));
        $this->install(new PackageModule());
    }
}
