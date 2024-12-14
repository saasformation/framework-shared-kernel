<?php declare(strict_types=1);

namespace SaaSFormation\Framework\SharedKernel\Application\ReadModel;

use SaaSFormation\Framework\SharedKernel\Common\Identity\IdInterface;

abstract class AbstractReadModel implements ReadModelInterface
{
    public function setId(IdInterface $readModelId): void
    {
        $this->readModelId = $readModelId;
    }
}