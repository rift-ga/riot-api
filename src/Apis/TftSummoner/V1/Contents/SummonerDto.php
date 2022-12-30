<?php

namespace Rift\RiotApi\Apis\TftSummoner\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $accountId Encrypted account ID. Max length 56 characters.
 * @property int $profileIconId ID of the summoner icon associated with the summoner.
 * @property int $revisionDate Date summoner was last modified specified as epoch milliseconds. The following events will update this timestamp: summoner name change, summoner level change, or profile icon change.
 * @property string $name Summoner name.
 * @property string $id Encrypted summoner ID. Max length 63 characters.
 * @property string $puuid Encrypted PUUID. Exact length of 78 characters.
 * @property int $summonerLevel Summoner level associated with the summoner.
 */
class SummonerDto extends BaseContent
{
    final protected function __construct(
        public readonly string $accountId,
        public readonly int $profileIconId,
        public readonly int $revisionDate,
        public readonly string $name,
        public readonly string $id,
        public readonly string $puuid,
        public readonly int $summonerLevel,
    ) {
    }
}
