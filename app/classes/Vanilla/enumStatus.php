<?php declare(strict_types=1);

namespace Vanilla;

enum enumStatus: string
{
    case OK          = 'Up to date';
    case Outdated    = 'Outdated';
    case Removed2024 = 'Removed in 2024';
    case Removed2025 = 'Removed in 2025';
    case Upgrade     = 'Upgrading';
    case Updated     = 'Updated in 2025';
    case Candidate   = 'Dictionary candidate';
    case Unknown     = 'Unknown';
}
