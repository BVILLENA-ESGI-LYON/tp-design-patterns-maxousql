<?php

namespace EsgiIw\TpDesignPattern\Model\Mailer;

readonly class Mailer
{
    public function __construct(
        public array $recipients,
        public string $subject,
        public string $body,
        public ?array $copy = null,
        public ?array $attachments = null
    ) {
        $this->validateRecipients();
        $this->validateCopy();
        $this->validateAttachments();
    }

    private function validateRecipients(): void
    {
        foreach ($this->recipients as $recipient) {
            if (!filter_var($recipient, FILTER_VALIDATE_EMAIL)) {
                throw new \InvalidArgumentException("'$recipient' is not a valid email address.");
            }
        }
    }

    private function validateCopy(): void
    {
        if ($this->copy !== null) {
            foreach ($this->copy as $copyRecipient) {
                if (!filter_var($copyRecipient, FILTER_VALIDATE_EMAIL)) {
                    throw new \InvalidArgumentException("'$copyRecipient' is not a valid email address.");
                }
            }
        }
    }

    private function validateAttachments(): void
    {
        if ($this->attachments !== null) {
            foreach ($this->attachments as $attachment) {
                if (!file_exists($attachment)) {
                    throw new \InvalidArgumentException("Attachment '$attachment' does not exist.");
                }
            }
        }
    }
}
