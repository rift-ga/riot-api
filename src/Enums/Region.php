<?php

namespace Rift\RiotApi\Enums;

enum Region: string
{
    // Platform Routing Values
    case BR1 = 'br1';
    case EUN1 = 'eun1';
    case EUW1 = 'euw1';
    case JP1 = 'jp1';
    case KR = 'kr';
    case LA1 = 'la1';
    case LA2 = 'la2';
    case NA1 = 'na1';
    case OC1 = 'oc1';
    case TR1 = 'tr1';
    case RU = 'ru';

    // Regional Routing Values
    case AMERICAS = 'americas';
    case ASIA = 'asia';
    case ESPORTS = 'esports';
    case EUROPE = 'europe';
}
