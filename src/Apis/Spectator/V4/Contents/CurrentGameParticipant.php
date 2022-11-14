<?php

namespace Rift\RiotApi\Apis\Spectator\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int $championId The ID of the champion played by this participant
 * @property Perks $perks Perks/Runes Reforged Information
 * @property int $profileIconId The ID of the profile icon used by this participant
 * @property bool $bot Flag indicating whether or not this participant is a bot
 * @property int $teamId The team ID of this participant, indicating the participant's team
 * @property string $summonerName The summoner name of this participant
 * @property string $summonerId The encrypted summoner ID of this participant
 * @property int $spell1Id The ID of the first summoner spell used by this participant
 * @property int $spell2Id The ID of the second summoner spell used by this participant
 * @property GameCustomizationObject[] $gameCustomizationObjects List of Game Customizations
 */
class CurrentGameParticipant extends BaseContent
{
    final protected function __construct(
        public readonly int $championId,
        public readonly Perks $perks,
        public readonly int $profileIconId,
        public readonly bool $bot,
        public readonly int $teamId,
        public readonly string $summonerName,
        public readonly string $summonerId,
        public readonly int $spell1Id,
        public readonly int $spell2Id,
        public readonly array $gameCustomizationObjects,
    ) {
    }
}
