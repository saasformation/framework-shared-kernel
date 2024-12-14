<?php

namespace SaaSFormation\Framework\SharedKernel\Domain;

use SaaSFormation\Framework\SharedKernel\Common\Identity\IdInterface;

interface AggregateInterface
{
    public IdInterface $id {
        get;
    }

    public DomainEventStream $eventStream {
        get;
    }

    public function aggregateCode(): string;
}