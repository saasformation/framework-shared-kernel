<?php

namespace SaaSFormation\Framework\SharedKernel\Application\Messages;

use SaaSFormation\Framework\SharedKernel\Common\Identity\IdInterface;

abstract class AbstractCommand implements CommandInterface
{
    private ?IdInterface $commandId = null;
    private CommandStatusEnum $status = CommandStatusEnum::PENDING;
    private ?IdInterface $requestId = null;
    private ?IdInterface $correlationId = null;
    private ?IdInterface $executorId = null;

    public function getCommandId(): ?IdInterface
    {
        return $this->commandId;
    }

    public function getStatus(): CommandStatusEnum
    {
        return $this->status;
    }

    public function getRequestId(): ?IdInterface
    {
        return $this->requestId;
    }

    public function getCorrelationId(): ?IdInterface
    {
        return $this->correlationId;
    }

    public function getExecutorId(): ?IdInterface
    {
        return $this->executorId;
    }

    public function setCommandId(IdInterface $commandId): void
    {
        $this->commandId = $commandId;
    }

    public function markAsSucceeded(): void
    {
        $this->status = CommandStatusEnum::SUCCEEDED;
    }

    public function markAsFailed(): void
    {
        $this->status = CommandStatusEnum::FAILED;
    }

    public function setRequestId(IdInterface $requestId): void
    {
        $this->requestId = $requestId;
    }

    public function setCorrelationId(IdInterface $correlationId): void
    {
        $this->correlationId = $correlationId;
    }

    public function setExecutorId(IdInterface $executorId): void
    {
        $this->executorId = $executorId;
    }
}