<?php declare(strict_types=1);

namespace SaaSFormation\Framework\SharedKernel\Domain\Messages;

use SaaSFormation\Framework\SharedKernel\Common\Identity\IdInterface;

abstract class AbstractDomainEvent implements DomainEventInterface
{
    public function __construct(IdInterface $aggregateId)
    {
        $this->aggregateId = $aggregateId;
    }

    public ?IdInterface $domainEventId {
        get {
            return $this->domainEventId;
        }
        set {
            $this->domainEventId = $value;
        }
    }
    public ?IdInterface $requestId {
        get {
            return $this->requestId;
        }
        set {
            $this->requestId = $value;
        }
    }
    public ?IdInterface $correlationId {
        get {
            return $this->correlationId;
        }
        set {
            $this->correlationId = $value;
        }
    }
    public ?IdInterface $generatorCommandId {
        get {
            return $this->generatorCommandId;
        }
        set {
            $this->generatorCommandId = $value;
        }
    }
}