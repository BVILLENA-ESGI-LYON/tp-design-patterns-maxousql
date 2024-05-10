<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Alert\Factory\EmailAlertContentFactory;
use EsgiIw\TpDesignPattern\Alert\Factory\SmsAlertContentFactory;

require_once 'vendor/autoload.php';

echo "<--------------------------> Tests Abstract Factory <-------------------------->\n\n";

function testEmailAlertContentFactory(): void
{
    echo "############### Testing Email Alert Content Factory ###############\n\n";
    $factory = new EmailAlertContentFactory();

    $informAdminUserCreateContent = $factory->createInformAdminUserCreateContent();
    echo "> Notification admin validation d'un compte utilisateur :\n" . $informAdminUserCreateContent->getContent() . "\n\n";

    $confirmEventInscriptionContent = $factory->createConfirmEventInscriptionContent();
    echo "> Confirmation d'inscription à un évènement :\n" . $confirmEventInscriptionContent->getContent() . "\n\n";

    $eventReminderContent = $factory->createEventReminderContent();
    echo "> Notification de rappel d'évènement 1 jour avant :\n" . $eventReminderContent->getContent() . "\n\n";
}

function testSmsAlertContentFactory(): void
{
    echo "############### Testing SMS Alert Content Factory ###############\n\n";
    $factory = new SmsAlertContentFactory();

    $informAdminUserCreateContent = $factory->createInformAdminUserCreateContent();
    echo "> Notification admin validation d'un compte utilisateur :\n" . $informAdminUserCreateContent->getContent() . "\n\n";

    $confirmEventInscriptionContent = $factory->createConfirmEventInscriptionContent();
    echo "> Confirmation d'inscription à un évènement :\n" . $confirmEventInscriptionContent->getContent() . "\n\n";

    $eventReminderContent = $factory->createEventReminderContent();
    echo "> Notification de rappel d'évènement 1 jour avant :\n" . $eventReminderContent->getContent() . "\n\n";
}

testEmailAlertContentFactory();
testSmsAlertContentFactory();
