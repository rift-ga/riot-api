<?php

namespace Rift\RiotApi\Apis\Spectator\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $category Category identifier for Game Customization
 * @property string $content  Game Customization content
 */
class GameCustomizationObject extends BaseContent
{
    final protected function __construct(
        public readonly string $category,
        public readonly string $content,
    ) {
    }
}
