<?php

namespace SaaSFormation\Framework\SharedKernel\Domain;

use SaaSFormation\Framework\SharedKernel\Domain\Messages\AbstractDomainEvent;

class DomainEventStream
{
    private array $events;

    public function __construct()
    {
        $this->clear();
    }

    public function add(AbstractDomainEvent $event): static
    {
        $this->events[] = $event;

        return $this;
    }

    /**
     * @return array|AbstractDomainEvent[]
     */
    public function events(): array
    {
        return $this->events;
    }

    private function clear(): void
    {
        $this->events = [];
    }
}