<?php

namespace Rift\RiotApi\Apis\ValContent\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string            $name
 * @property LocalizedNamesDto $localizedNames This field is excluded from the response when a locale is set
 * @property string            $id
 * @property string            $assetName
 * @property string            $assetPath      This field is only included for maps and game modes. These values are used in the match response.
 */
class ContentItemDto extends BaseContent
{
    final protected function __construct(
        public readonly string $name,
        public readonly LocalizedNamesDto $localizedNames,
        public readonly string $id,
        public readonly string $assetName,
        public readonly string $assetPath,
    ) {
    }
}
