<?php

namespace Rift\RiotApi\Enums;

enum Queue
{
    // League of Legends
    case RANKED_SOLO_5x5;
    case RANKED_TFT;
    case RANKED_FLEX_SR;
    case RANKED_FLEX_TT;

    // Teamfight Tactics
    case RANKED_TFT_TURBO;
}
