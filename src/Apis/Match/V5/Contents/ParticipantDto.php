<?php

namespace Rift\RiotApi\Apis\Match\V5\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int    $championId         Prior to patch 11.4, on Feb 18th, 2021, this field returned invalid championIds. We recommend determining the champion based on the championName field for matches played prior to patch 11.4.
 * @property int    $championTransform  This field is currently only utilized for Kayn's transformations. (Legal values: 0 - None, 1 - Slayer, 2 - Assassin)
 * @property string $individualPosition Both individualPosition and teamPosition are computed by the game server and are different versions of the most likely position played by a player. The individualPosition is the best guess for which position the player actually played in isolation of anything else. The teamPosition is the best guess for which position the player actually played if we add the constraint that each team must have one top player, one jungle, one middle, etc. Generally the recommendation is to use the teamPosition field over the individualPosition field.
 * @property string $teamPosition       Both individualPosition and teamPosition are computed by the game server and are different versions of the most likely position played by a player. The individualPosition is the best guess for which position the player actually played in isolation of anything else. The teamPosition is the best guess for which position the player actually played if we add the constraint that each team must have one top player, one jungle, one middle, etc. Generally the recommendation is to use the teamPosition field over the individualPosition field.
 */
class ParticipantDto extends BaseContent
{
    final protected function __construct(
        public readonly int $assists,
        public readonly int $baronKills,
        public readonly int $bountyLevel,
        public readonly int $champExperience,
        public readonly int $champLevel,
        public readonly int $championId,
        public readonly string $championName,
        public readonly int $championTransform,
        public readonly int $consumablesPurchased,
        public readonly int $damageDealtToBuildings,
        public readonly int $damageDealtToObjectives,
        public readonly int $damageDealtToTurrets,
        public readonly int $damageSelfMitigated,
        public readonly int $deaths,
        public readonly int $detectorWardsPlaced,
        public readonly int $doubleKills,
        public readonly int $dragonKills,
        public readonly bool $firstBloodAssist,
        public readonly bool $firstBloodKill,
        public readonly bool $firstTowerAssist,
        public readonly bool $firstTowerKill,
        public readonly bool $gameEndedInEarlySurrender,
        public readonly bool $gameEndedInSurrender,
        public readonly int $goldEarned,
        public readonly int $goldSpent,
        public readonly string $individualPosition,
        public readonly int $inhibitorKills,
        public readonly int $inhibitorTakedowns,
        public readonly int $inhibitorsLost,
        public readonly int $item0,
        public readonly int $item1,
        public readonly int $item2,
        public readonly int $item3,
        public readonly int $item4,
        public readonly int $item5,
        public readonly int $item6,
        public readonly int $itemsPurchased,
        public readonly int $killingSprees,
        public readonly int $kills,
        public readonly string $lane,
        public readonly int $largestCriticalStrike,
        public readonly int $largestKillingSpree,
        public readonly int $largestMultiKill,
        public readonly int $longestTimeSpentLiving,
        public readonly int $magicDamageDealt,
        public readonly int $magicDamageDealtToChampions,
        public readonly int $magicDamageTaken,
        public readonly int $neutralMinionsKilled,
        public readonly int $nexusKills,
        public readonly int $nexusTakedowns,
        public readonly int $nexusLost,
        public readonly int $objectivesStolen,
        public readonly int $objectivesStolenAssists,
        public readonly int $participantId,
        public readonly int $pentaKills,
        public readonly PerksDto $perks,
        public readonly int $physicalDamageDealt,
        public readonly int $physicalDamageDealtToChampions,
        public readonly int $physicalDamageTaken,
        public readonly int $profileIcon,
        public readonly string $puuid,
        public readonly int $quadraKills,
        public readonly string $riotIdName,
        public readonly string $riotIdTagline,
        public readonly string $role,
        public readonly int $sightWardsBoughtInGame,
        public readonly int $spell1Casts,
        public readonly int $spell2Casts,
        public readonly int $spell3Casts,
        public readonly int $spell4Casts,
        public readonly int $summoner1Casts,
        public readonly int $summoner1Id,
        public readonly int $summoner2Casts,
        public readonly int $summoner2Id,
        public readonly string $summonerId,
        public readonly int $summonerLevel,
        public readonly string $summonerName,
        public readonly bool $teamEarlySurrendered,
        public readonly int $teamId,
        public readonly string $teamPosition,
        public readonly int $timeCCingOthers,
        public readonly int $timePlayed,
        public readonly int $totalDamageDealt,
        public readonly int $totalDamageDealtToChampions,
        public readonly int $totalDamageShieldedOnTeammates,
        public readonly int $totalDamageTaken,
        public readonly int $totalHeal,
        public readonly int $totalHealsOnTeammates,
        public readonly int $totalMinionsKilled,
        public readonly int $totalTimeCCDealt,
        public readonly int $totalTimeSpentDead,
        public readonly int $totalUnitsHealed,
        public readonly int $tripleKills,
        public readonly int $trueDamageDealt,
        public readonly int $trueDamageDealtToChampions,
        public readonly int $trueDamageTaken,
        public readonly int $turretKills,
        public readonly int $turretTakedowns,
        public readonly int $turretsLost,
        public readonly int $unrealKills,
        public readonly int $visionScore,
        public readonly int $visionWardsBoughtInGame,
        public readonly int $wardsKilled,
        public readonly int $wardsPlaced,
        public readonly bool $win,
    ) {
    }
}
