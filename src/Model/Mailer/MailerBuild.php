<?php

namespace EsgiIw\TpDesignPattern\Model\Mailer;

class MailerBuild
{
    private array $recipients;
    private ?array $copy = null;
    private ?array $attachments = null;

    public function __construct(
        private string $subject,
        private string $body,
        private string $recipient,
    ) {
        $this->recipients = [$recipient];
    }

    public function addRecipient(string $newRecipient): self
    {
        $this->validateEmail($newRecipient);
        $builder = clone $this;
        $builder->recipients[] = $newRecipient;
        return $builder;
    }

    public function addCopy(string $toCopy): self
    {
        $this->validateEmail($toCopy);
        $builder = clone $this;
        $builder->copy[] = $toCopy;
        return $builder;
    }

    public function addAttachment(string $attachment): self
    {
        $builder = clone $this;
        $builder->attachments[] = $attachment;
        return $builder;
    }

    public function getResult(): Mailer
    {
        return new Mailer(
            $this->recipients,
            $this->subject,
            $this->body,
            $this->copy,
            $this->attachments,
        );
    }

    private function validateEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("'$email' is not a valid email address.");
        }
    }
}
