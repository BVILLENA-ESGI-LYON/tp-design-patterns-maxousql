<?php

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\Model\Repository;

use EsgiIw\TpDesignPattern\Model\Entity\EventInterface;

class EntityRepository
{
    public function findById(int $id): ?EventInterface
    {
        return null;
    }

    public function findAll(): array
    {
        return [null];
    }

    public function save(EventInterface $entity): void
    {
    }

    public function update(EventInterface $entity): void
    {
    }

    public function delete(EventInterface $entity): void
    {
    }
}
