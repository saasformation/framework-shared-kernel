<?php

namespace SaaSFormation\Framework\SharedKernel\Application\Messages;

use SaaSFormation\Framework\SharedKernel\Common\Identity\IdInterface;

abstract class AbstractCommand implements CommandInterface
{
    public ?IdInterface $commandId {
        get {
            return $this->commandId;
        }
        set {
            $this->commandId = $value;
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
    public ?IdInterface $executorId {
        get {
            return $this->executorId;
        }
        set {
            $this->executorId = $value;
        }
    }
}