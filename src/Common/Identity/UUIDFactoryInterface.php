<?php

namespace SaaSFormation\Framework\SharedKernel\Common\Identity;

interface UUIDFactoryInterface
{
    public function generate(int $version = 7): UUIDInterface;
    public function fromString(string $uuid): UUIDInterface;
}