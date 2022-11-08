<?php

namespace Rift\RiotApi\Apis\Account\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * Represents an account.
 */
class AccountDto extends BaseContent
{
    final protected function __construct(
        public readonly string $puuid,
        public readonly ?string $gameName = null,
        public readonly ?string $tagLine = null,
    ) {}
}
