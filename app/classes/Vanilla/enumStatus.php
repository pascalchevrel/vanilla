<?php declare(strict_types=1);

namespace Vanilla;

enum enumStatus: string
{
    case OK            = 'Up to date';
    case Outdated      = '2026: Outdated';
    case Incompatible  = 'Incompatible license';
    case Removed2024   = '2024: Removed';
    case Removed2025   = '2025: Removed';
    case Upgrade       = 'Upgrading';
    case Updated2025   = '2025: Updated';
    case Updated2026   = '2026: Updated';
    case Candidate     = '2026: Candidate';
    case Added2025     = '2025: Added';
    case Added2026     = '2026: Added';
    case Unknown       = 'Unknown source';
    case NoneFound     = 'No dictionary found';
    case Investigation = 'Investigation in progress';
    case English       = 'English dictionary';
}
