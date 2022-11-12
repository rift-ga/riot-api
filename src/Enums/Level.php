<?php

namespace Rift\RiotApi\Enums;

enum Level
{
    case NONE;
    case IRON;
    case BRONZE;
    case SILVER;
    case GOLD;
    case PLATINUM;
    case DIAMOND;
    case MASTER;
    case GRANDMASTER;
    case CHALLENGER;
    case HIGHEST_NOT_LEADERBOARD_ONLY;
    case HIGHEST;
    case LOWEST;
}
