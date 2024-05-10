<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Model\Database\DbCon;
use EsgiIw\TpDesignPattern\Model\Mailer\MailerCon;

require_once 'vendor/autoload.php';

define('DB_CONNECTION_TEST_HEADER', "############### Connexion à la base de données ###############\n\n");
define('MAILER_CONNECTION_TEST_HEADER', "############### Connexion au service de mail ###############\n\n");

echo "<--------------------------> Tests Singleton <-------------------------->\n\n";

function testDbConnection(): void
{
    echo DB_CONNECTION_TEST_HEADER;

    echo "> ID Connexion numéro 1 :\n";
    $dbCon1 = spl_object_id(DbCon::getInstance());
    var_dump($dbCon1);

    echo "\n";

    echo "> ID Connexion numéro 2 :\n";
    $dbCon2 = spl_object_id(DbCon::getInstance());
    var_dump($dbCon2);

    echo "\n";

    echo "> Les 2 ID sont égaux, on peut donc en déduire que nous utilisons bien la même instance de connexion à la base de données.\n\nidCon1({$dbCon1}) === idCon2({$dbCon2}) return ";

    var_dump($dbCon1 === $dbCon2);

    echo "\n\n";
}

function testMailerConnection(): void
{
    echo MAILER_CONNECTION_TEST_HEADER;

    echo "> ID Connexion numéro 1 :\n";
    $mailerCon1 = spl_object_id(MailerCon::getInstance());
    var_dump($mailerCon1);

    echo "\n";

    echo "> ID Connexion numéro 2 :\n";
    $mailerCon2 = spl_object_id(MailerCon::getInstance());
    var_dump($mailerCon2);

    echo "\n";

    echo "> Les 2 ID sont égaux, on peut donc en déduire que nous utilisons bien la même instance de connexion au service de mail.\n\nidMailerCon1({$mailerCon1}) === idMailerCon2({$mailerCon2}) return ";

    var_dump($mailerCon1 === $mailerCon2);

    echo "\n";
}

testDbConnection();
testMailerConnection();
