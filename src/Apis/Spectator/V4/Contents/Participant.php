<?php

namespace Rift\RiotApi\Apis\Spectator\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property bool $bot Flag indicating whether or not this participant is a bot
 * @property int $spell2Id The ID of the second summoner spell used by this participant
 * @property int $profileIconId The ID of the profile icon used by this participant
 * @property string $summonerName The summoner name of this participant
 * @property int $championId The ID of the champion played by this participant
 * @property int $teamId The team ID of this participant, indicating the participant's team
 * @property int $spell1Id The ID of the first summoner spell used by this participant
 */
class Participant extends BaseContent
{
    final protected function __construct(
        public readonly bool $bot,
        public readonly int $spell2Id,
        public readonly int $profileIconId,
        public readonly string $summonerName,
        public readonly int $championId,
        public readonly int $teamId,
        public readonly int $spell1Id,
    ) {
    }
}
