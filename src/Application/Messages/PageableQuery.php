<?php

namespace SaaSFormation\Framework\SharedKernel\Application\Messages;

trait PageableQuery
{
    private int $page;
    private int $perPage;

    public function initializePageableQuery(
        int $page,
        int $perPage
    ): void
    {
        $this->page = $page;
        $this->perPage = $perPage;
    }

    public function page(): int
    {
        return $this->page;
    }

    public function perPage(): int
    {
        return $this->perPage;
    }
}