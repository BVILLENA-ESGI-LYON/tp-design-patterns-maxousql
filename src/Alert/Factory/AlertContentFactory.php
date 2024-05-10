<?php

namespace EsgiIw\TpDesignPattern\Alert\Factory;

use EsgiIw\TpDesignPattern\Alert\AlertContentInterface;

interface AlertContentFactory
{
    public function createInformAdminUserCreateContent(): AlertContentInterface;
    public function createConfirmEventInscriptionContent(): AlertContentInterface;
    public function createEventReminderContent(): AlertContentInterface;
}
