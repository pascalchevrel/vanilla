<?php declare(strict_types=1);

namespace Vanilla;

enum enumStatus: string
{
    case Yes     = 'Yes';
    case No      = 'No';
    case Removed = 'Removed in 2025';
    case Upgrade = 'Upgrading';
    case Updated = 'Updated in 2025';
    case Unknown = 'Unknown';
}
