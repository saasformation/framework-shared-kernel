<?php declare(strict_types=1);

namespace SaaSFormation\Framework\SharedKernel\Application\ReadModel;

use SaaSFormation\Framework\SharedKernel\Common\Identity\IdInterface;

interface ReadModelRepositoryInterface
{
    public function save(IdInterface $requestId, AbstractReadModel $readModel): void;

    /**
     * @param array<string, mixed> $criteria
     * @return ?AbstractReadModel
     */
    public function findOneByCriteria(IdInterface $requestId, array $criteria): ?AbstractReadModel;

    /**
     * @param array<string, mixed> $criteria
     * @return RepositoryCollectionResult
     */
    public function findByCriteria(IdInterface $requestId, array $criteria): RepositoryCollectionResult;
}