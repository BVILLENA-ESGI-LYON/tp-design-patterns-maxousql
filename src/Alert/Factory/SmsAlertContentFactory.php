<?php

namespace EsgiIw\TpDesignPattern\Alert\Factory;

use EsgiIw\TpDesignPattern\Alert\AlertContentInterface;
use EsgiIw\TpDesignPattern\Alert\SmsAlertContent;

class SmsAlertContentFactory implements AlertContentFactory
{
    public function createInformAdminUserCreateContent(): AlertContentInterface
    {
        return new SmsAlertContent("Envoie d'un SMS à l'administrateur pour lui notifier la validation d'un compte utilisateur.");
    }

    public function createConfirmEventInscriptionContent(): AlertContentInterface
    {
        return new SmsAlertContent("Envoie d'un SMS pour confirmer l'inscription à un évènement.");
    }

    public function createEventReminderContent(): AlertContentInterface
    {
        return new SmsAlertContent("Envoie d'un SMS pour notifier l'utilisateur que son évènement à lieu dans 1 jour.");
    }
}
