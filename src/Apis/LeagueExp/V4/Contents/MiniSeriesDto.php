<?php

namespace Rift\RiotApi\Apis\LeagueExp\V4\Contents;

use Rift\RiotApi\Interfaces\ContentInterface;

class MiniSeriesDto implements ContentInterface
{
    public function __construct(
        private readonly int $losses,
        private readonly string $progress,
        private readonly int $target,
        private readonly int $wins,
    ) {
    }

    public function getLosses(): int
    {
        return $this->losses;
    }

    public function getProgress(): string
    {
        return $this->progress;
    }

    public function getTarget(): int
    {
        return $this->target;
    }

    public function getWins(): int
    {
        return $this->wins;
    }
}
