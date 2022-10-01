<?php

namespace Rift\RiotApi\Apis\Clash\V1\Contents;

use Rift\RiotApi\Interfaces\ContentInterface;

class TeamDto implements ContentInterface
{
    public function __construct(
        private readonly string $id,
        private readonly int $tournamentId,
        private readonly string $name,
        private readonly int $iconId,
        private readonly int $tier,
        private readonly string $captain,
        private readonly string $abbreviation,
        private readonly array $players,
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTournamentId(): int
    {
        return $this->tournamentId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIconId(): int
    {
        return $this->iconId;
    }

    public function getTier(): int
    {
        return $this->tier;
    }

    public function getCaptain(): string
    {
        return $this->captain;
    }

    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }

    /**
     * @return PlayerDto[]
     */
    public function getPlayers(): array
    {
        return $this->players;
    }
}
