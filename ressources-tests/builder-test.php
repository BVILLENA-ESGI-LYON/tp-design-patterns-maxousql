<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Model\Mailer\MailerBuild;

require_once 'vendor/autoload.php';

echo "<--------------------------> Tests Builder <-------------------------->\n\n";

echo "############### Test de la création d'un mail ###############\n\n";
echo "> Création instance MailerBuilder : \n";
$mailBuilder = new MailerBuild(
    "Sujet",
    "Corps",
    "maxlaiyio@outlook.fr"
);
var_dump($mailBuilder);

echo "\n\n";

echo "> Ajout autres destinataires, en copie et une pj :\n";
$mailBuilder
    ->addRecipient("jeanpaul@gmail.com")
    ->addCopy("audrey@outlook.fr")
    ->addCopy("boblebriocoleur@hotmail.com")
    ->addAttachment("photo_de_mon_pyjama.png");

var_dump($mailBuilder);

echo "\n\n";

echo "> Génération instrance Mailer depuis le builder : \n\n";
$finalMailer = $mailBuilder->getResult();
var_dump($finalMailer);
