<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Alert\Factory\DatabaseRecordLoginAlertFactory;
use EsgiIw\TpDesignPattern\Alert\Factory\FileLogLoginAlertFactory;
use EsgiIw\TpDesignPattern\Alert\Factory\EmailAdminLoginAlertFactory;

require_once 'vendor/autoload.php';

define('DB_CONNECTION_TEST_HEADER', "############### Connexion à la base de données ###############\n\n");
define('MAILER_CONNECTION_TEST_HEADER', "############### Connexion au service de mail ###############\n\n");

echo "<--------------------------> Tests Factory Method <-------------------------->\n\n";

function testDatabaseRecordLoginAlertFactory(): void
{
    echo "> Testing Database Record Login Alert Factory :\n";
    $factory = new DatabaseRecordLoginAlertFactory();
    $factory->triggerLoginAlert("maxousql");
    echo "Database Record Login Alert Factory test completed.\n\n";
}

function testFileLogLoginAlertFactory(): void
{
    echo "> Testing File Log Login Alert Factory :\n";
    $factory = new FileLogLoginAlertFactory();
    $factory->triggerLoginAlert("maxousql");
    echo "File Log Login Alert Factory test completed.\n\n";
}

function testEmailAdminLoginAlertFactory(): void
{
    echo "> Testing Email Admin Login Alert Factory :\n";
    $factory = new EmailAdminLoginAlertFactory();
    $factory->triggerLoginAlert("maxousql");
    echo "Email Admin Login Alert Factory test completed.\n\n";
}

testDatabaseRecordLoginAlertFactory();
testFileLogLoginAlertFactory();
testEmailAdminLoginAlertFactory();
