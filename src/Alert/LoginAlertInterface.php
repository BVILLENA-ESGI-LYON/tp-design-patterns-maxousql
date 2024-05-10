<?php

namespace EsgiIw\TpDesignPattern\Alert;

interface LoginAlertInterface
{
    public function trigger(string $username): void;
}
