<?php

namespace SaaSFormation\Framework\SharedKernel\Domain\WriteModel;

use SaaSFormation\Framework\SharedKernel\Common\Identity\IdInterface;
use SaaSFormation\Framework\SharedKernel\Domain\AbstractAggregate;

interface RepositoryInterface
{
    public function save(AbstractAggregate $aggregate): void;
    public function hasAggregate(IdInterface $id): bool;
}