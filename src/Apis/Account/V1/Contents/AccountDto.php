<?php

namespace Rift\RiotApi\Apis\Account\V1\Contents;

use Rift\RiotApi\Interfaces\ContentInterface;

/**
 * Represents an account.
 */
class AccountDto implements ContentInterface
{
    public function __construct(
        private readonly string $puuid,
        private readonly ?string $gameName = null,
        private readonly ?string $tagLine = null,
    ) {
    }

    public function getPuuid(): string
    {
        return $this->puuid;
    }

    public function getGameName(): ?string
    {
        return $this->gameName;
    }

    public function getTagLine(): ?string
    {
        return $this->tagLine;
    }
}
