<?php

namespace Rift\RiotApi\Apis\LolChallenges\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

class PlayerInfoDto extends BaseContent
{
    final protected function __construct(
        public readonly array $challenges,
        public readonly array $preferences,
        public readonly array $totalPoints,
        public readonly array $categoryPoints,
    ) {
    }
}
