<?php declare(strict_types=1);

namespace SaaSFormation\Framework\SharedKernel\Application\Messages;

use SaaSFormation\Framework\SharedKernel\Common\Identity\IdInterface;

interface CommandInterface
{
    public ?IdInterface $commandId {
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

    public ?IdInterface $executorId {
        get;
        set;
    }

    public function commandCode(): string;
}