<?php declare(strict_types=1);

namespace Vanilla;

enum enumStatus: string
{
    case OK          = 'Up to date';
    case Outdated    = 'Outdated';
    case Removed2024 = 'Removed in 2024';
    case Removed2025 = 'Removed in 2025';
    case Upgrade     = 'Upgrading';
    case Updated2025 = 'Updated in 2025';
    case Updated2026 = 'Updated in 2026';
    case Candidate   = 'Dictionary candidate';
    case Added2025   = 'Added in 2025';
    case Added2026   = 'Added in 2026';
    case Unknown     = 'Unknown';
}
