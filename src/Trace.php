<?php

declare(strict_types=1);

namespace Soa\Traceability;

class Trace
{
    /**
     * @var string
     */
    private $occurredOn;

    /**
     * @var string
     */
    private $correlationId;

    /**
     * @var string
     */
    private $causationId;

    /**
     * @var string
     */
    private $replyTo;

    /**
     * @var string
     */
    private $processId;

    /**
     * @var string
     */
    private $messageId;

    public function __construct(string $messageId, string $occurredOn, string $correlationId, string $causationId, string $replyTo, string $processId)
    {
        $this->occurredOn    = $occurredOn;
        $this->correlationId = $correlationId;
        $this->causationId   = $causationId;
        $this->replyTo       = $replyTo;
        $this->processId     = $processId;
        $this->messageId     = $messageId;
    }

    public function occurredOn(): string
    {
        return $this->occurredOn;
    }

    public function correlationId(): string
    {
        return $this->correlationId;
    }

    public function causationId(): string
    {
        return $this->causationId;
    }

    public function replyTo(): string
    {
        return $this->replyTo;
    }

    public function processId(): string
    {
        return $this->processId;
    }

    public function messageId(): string
    {
        return $this->messageId;
    }
}
