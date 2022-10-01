<?php

namespace Rift\RiotApi\Apis\Clash\V1\Contents;

use Rift\RiotApi\Interfaces\ContentInterface;

class TournamentDto implements ContentInterface
{
    public function __construct(
        private readonly int $id,
        private readonly int $themeId,
        private readonly string $nameKey,
        private readonly string $nameKeySecondary,
        private readonly array $schedule,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getThemeId(): int
    {
        return $this->themeId;
    }

    public function getNameKey(): string
    {
        return $this->nameKey;
    }

    public function getNameKeySecondary(): string
    {
        return $this->nameKeySecondary;
    }

    /**
     * @return TournamentPhaseDto[]
     */
    public function getSchedule(): array
    {
        return $this->schedule;
    }
}
