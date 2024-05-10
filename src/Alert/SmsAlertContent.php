<?php

namespace EsgiIw\TpDesignPattern\Alert;

class SmsAlertContent implements AlertContentInterface
{
    protected $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
