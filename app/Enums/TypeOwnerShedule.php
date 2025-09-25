<?php

namespace App\Enums;

use App\Interfaces\OptionsEnumInterface;
use App\Traits\UtilsTraitEnum;

enum TypeOwnerShedule: int implements OptionsEnumInterface
{
    use UtilsTraitEnum;

    case Barbershop = 1;
    case Barber = 2;

    public function description(): string
    {
        return match($this) {
            self::Barbershop => 'Barbería',
            self::Barber => 'Barbero',
        };
    }
}
