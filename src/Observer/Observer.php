<?php

namespace EsgiIw\TpDesignPattern\Observer;

class Observer
{
    private string $messageEcho;

    public function __construct(string $message)
    {
        $this->messageEcho = $message;
    }

    public function handle()
    {
        echo $this->messageEcho;
    }
}
