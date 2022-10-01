<?php

namespace Rift\RiotApi\Apis\Clash\V1\Contents;

use Rift\RiotApi\Interfaces\ContentInterface;

class TournamentPhaseDto implements ContentInterface
{
    public function __construct(
        private readonly int $id,
        private readonly int $registrationTime,
        private readonly int $startTime,
        private readonly bool $cancelled,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getRegistrationTime(): int
    {
        return $this->registrationTime;
    }

    public function getStartTime(): int
    {
        return $this->startTime;
    }

    public function isCancelled(): bool
    {
        return $this->cancelled;
    }
}
