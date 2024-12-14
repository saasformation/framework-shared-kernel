<?php

namespace SaaSFormation\Framework\SharedKernel\Domain\Messages;

use SaaSFormation\Framework\SharedKernel\Common\Identity\IdInterface;

interface DomainEventInterface
{
    public ?IdInterface $domainEventId {
        get;
        set;
    }

    public IdInterface $aggregateId {
        get;
        set;
    }

    public ?IdInterface $requestId {
        get;
        set;
    }

    public ?IdInterface $correlationId {
        get;
        set;
    }

    public ?IdInterface $generatorCommandId {
        get;
        set;
    }

    public static function domainEventCode(): string;

    public function domainEventVersion(): int;

    /**
     * @return array<mixed, mixed>
     */
    public function toArray(): array;
}