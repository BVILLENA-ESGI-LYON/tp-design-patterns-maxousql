<?php

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\Model\Entity;

interface EventInterface
{
    public function getId(): int;

    public function setId(int $id): self;

    public function getLabel(): string;

    public function setLabel(string $label): self;

    public function getDescription(): string;

    public function setDescription(string $description): self;

    public function getDate(): \DateTime;

    public function setDate(\DateTime $date): self;
}
