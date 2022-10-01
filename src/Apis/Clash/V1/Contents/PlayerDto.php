<?php

namespace Rift\RiotApi\Apis\Clash\V1\Contents;

use Rift\RiotApi\Interfaces\ContentInterface;

class PlayerDto implements ContentInterface
{
    public function __construct(
        private readonly string $summonerId,
        private readonly string $teamId,
        private readonly string $position,
        private readonly string $role,
    ) {
    }

    public function getSummonerId(): string
    {
        return $this->summonerId;
    }

    public function getTeamId(): string
    {
        return $this->teamId;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function getRole(): string
    {
        return $this->role;
    }
}
