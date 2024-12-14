<?php

namespace SaaSFormation\Framework\SharedKernel\Application\EventDispatcher;

use SaaSFormation\Framework\SharedKernel\Domain\Messages\AbstractDomainEvent;

interface EventDispatcherInterface
{
    public function dispatch(AbstractDomainEvent $event): void;
}