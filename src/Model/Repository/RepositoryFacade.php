<?php

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\Model\Repository;

class RepositoryFacade
{
    private EntityRepository $entityRepository;

    public function __construct(EntityRepository $entityRepository)
    {
        $this->entityRepository = $entityRepository;
    }

    public function findEventById(int $id)
    {
        return $this->entityRepository->findById($id);
    }

    public function saveEvent($event)
    {
        $this->entityRepository->save($event);
    }

    public function updateEvent($event)
    {
        $this->entityRepository->update($event);
    }

    public function deleteEvent($event)
    {
        $this->entityRepository->delete($event);
    }
}
