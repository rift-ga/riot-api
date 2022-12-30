<?php

namespace Rift\RiotApi\Apis\ValContent\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $ar_AE
 * @property string $de_DE
 * @property string $en_GB
 * @property string $en_US
 * @property string $es_ES
 * @property string $es_MX
 * @property string $fr_FR
 * @property string $id_ID
 * @property string $it_IT
 * @property string $ja_JP
 * @property string $ko_KR
 * @property string $pl_PL
 * @property string $pt_BR
 * @property string $ru_RU
 * @property string $th_TH
 * @property string $tr_TR
 * @property string $vi_VN
 * @property string $zh_CN
 * @property string $zh_TW
 */
class LocalizedNamesDto extends BaseContent
{
    final protected function __construct(
        public readonly string $ar_AE,
        public readonly string $de_DE,
        public readonly string $en_GB,
        public readonly string $en_US,
        public readonly string $es_ES,
        public readonly string $es_MX,
        public readonly string $fr_FR,
        public readonly string $id_ID,
        public readonly string $it_IT,
        public readonly string $ja_JP,
        public readonly string $ko_KR,
        public readonly string $pl_PL,
        public readonly string $pt_BR,
        public readonly string $ru_RU,
        public readonly string $th_TH,
        public readonly string $tr_TR,
        public readonly string $vi_VN,
        public readonly string $zh_CN,
        public readonly string $zh_TW,
    ) {
    }
}
