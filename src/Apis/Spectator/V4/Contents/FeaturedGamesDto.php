<?php

namespace Rift\RiotApi\Apis\Spectator\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property FeaturedGameInfo[] $gameList              The list of featured games
 * @property int                $clientRefreshInterval The suggested interval to wait before requesting FeaturedGames again
 */
class FeaturedGamesDto extends BaseContent
{
    final protected function __construct(
        public readonly array $gameList,
        public readonly int $clientRefreshInterval,
    ) {
    }
}
