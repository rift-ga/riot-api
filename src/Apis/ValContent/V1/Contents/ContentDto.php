<?php

namespace Rift\RiotApi\Apis\ValContent\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $version
 * @property ContentItemDto[] $characters
 * @property ContentItemDto[] $maps
 * @property ContentItemDto[] $chromas
 * @property ContentItemDto[] $skins
 * @property ContentItemDto[] $skinLevels
 * @property ContentItemDto[] $equips
 * @property ContentItemDto[] $gameModes
 * @property ContentItemDto[] $sprays
 * @property ContentItemDto[] $sprayLevels
 * @property ContentItemDto[] $charms
 * @property ContentItemDto[] $charmLevels
 * @property ContentItemDto[] $playerCards
 * @property ContentItemDto[] $playerTitles
 * @property ActDto[] $acts
 */
class ContentDto extends BaseContent
{
    final protected function __construct(
        public readonly string $version,
        public readonly array $characters,
        public readonly array $maps,
        public readonly array $chromas,
        public readonly array $skins,
        public readonly array $skinLevels,
        public readonly array $equips,
        public readonly array $gameModes,
        public readonly array $sprays,
        public readonly array $sprayLevels,
        public readonly array $charms,
        public readonly array $charmLevels,
        public readonly array $playerCards,
        public readonly array $playerTitles,
        public readonly array $acts,
    ) {
    }
}
