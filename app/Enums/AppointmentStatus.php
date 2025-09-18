<?php

namespace App\Enums;

use App\Interfaces\OptionsEnumInterface;
use App\Traits\UtilsTraitEnum;

enum AppointmentStatus: string implements OptionsEnumInterface
{
    use UtilsTraitEnum;

    case Pending = 'P';
    case Confirmed = 'C';
    case Cancelled = 'X';
    case Completed = 'D';

    public function description(): string
    {
        return match($this) {
            self::Pending => 'Pendiente',
            self::Confirmed => 'Confirmada',
            self::Cancelled => 'Cancelada',
            self::Completed => 'Completada',
        };
    }
}
