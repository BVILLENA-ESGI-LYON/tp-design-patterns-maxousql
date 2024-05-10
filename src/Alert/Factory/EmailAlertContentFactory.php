<?php

namespace EsgiIw\TpDesignPattern\Alert\Factory;

use EsgiIw\TpDesignPattern\Alert\AlertContentInterface;
use EsgiIw\TpDesignPattern\Alert\EmailAlertContent;

class EmailAlertContentFactory implements AlertContentFactory
{
    public function createInformAdminUserCreateContent(): AlertContentInterface
    {
        return new EmailAlertContent("Envoie un email à l'administrateur pour lui notifier la validation d'un compte utilisateur.");
    }

    public function createConfirmEventInscriptionContent(): AlertContentInterface
    {
        return new EmailAlertContent("Envoie d'un email pour confirmer l'inscription à un évènement.");
    }

    public function createEventReminderContent(): AlertContentInterface
    {
        return new EmailAlertContent("Envoie d'un email pour notifier l'utilisateur que son évènement à lieu dans 1 jour.");
    }
}
