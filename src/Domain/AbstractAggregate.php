<?php

namespace SaaSFormation\Framework\SharedKernel\Domain;

use SaaSFormation\Framework\SharedKernel\Common\Identity\IdInterface;
use SaaSFormation\Framework\SharedKernel\Domain\Messages\AbstractDomainEvent;

abstract class AbstractAggregate implements AggregateInterface
{
    protected function __construct(IdInterface $id)
    {
        $this->id = $id;
        $this->eventStream = new DomainEventStream();
    }

    protected function fire(AbstractDomainEvent $event): void
    {
        $this->eventStream->add($event);
    }
}