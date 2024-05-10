<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\EventRegistration\Templates\SportEventRegistration;
use EsgiIw\TpDesignPattern\EventRegistration\Templates\BdeEventRegistration;
use EsgiIw\TpDesignPattern\Model\Entity\Event;

require_once 'vendor/autoload.php';

echo "<--------------------------> Tests Template Method <-------------------------->\n\n";

function testSportEventRegistration(): void
{
    echo "> Test de validation de l'inscription à un événement sportif :\n";
    $event = new Event();
    $event->setLabel('Match de football')
        ->setDescription('Match amical entre deux équipes')
        ->setDate(new DateTime('2024-05-20'));

    $sportRegistration = new SportEventRegistration();
    $result = $sportRegistration->validateRegistration($event);

    echo "Résultat de la validation : $result\n\n";
}

function testBdeEventRegistration(): void
{
    echo "> Test de validation de l'inscription à un événement organisé par le BDE :\n";
    $event = new Event();
    $event->setLabel('Soirée étudiante')
        ->setDescription('Soirée organisée par le Bureau des Étudiants')
        ->setDate(new DateTime('2024-05-20'));

    $bdeRegistration = new BdeEventRegistration();
    $result = $bdeRegistration->validateRegistration($event);

    echo "Résultat de la validation : $result\n\n";
}

testSportEventRegistration();
testBdeEventRegistration();
