<?php

namespace App\Enums;

use App\Interfaces\OptionsEnumInterface;
use App\Traits\UtilsTraitEnum;

enum DayOfWeek: string implements OptionsEnumInterface
{
    use UtilsTraitEnum;

    case Monday = 'mon';
    case Tuesday = 'tue';
    case Wednesday = 'wed';
    case Thursday = 'thu';
    case Friday = 'fri';
    case Saturday = 'sat';
    case Sunday = 'sun';

    public function description(): string
    {
        return match($this) {
            self::Monday => 'Lunes',
            self::Tuesday => 'Martes',
            self::Wednesday => 'Miércoles',
            self::Thursday => 'Jueves',
            self::Friday => 'Viernes',
            self::Saturday => 'Sábado',
            self::Sunday => 'Domingo',
        };
    }
}
