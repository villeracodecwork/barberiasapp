<?php

namespace App\Enums;

use App\Interfaces\OptionsEnumInterface;
use App\Traits\UtilsTraitEnum;

enum BarbershopStatus: string implements OptionsEnumInterface
{
    use UtilsTraitEnum;

    case Registered = 'registered';
    case Active = 'active';
    case Inactive = 'inactive';

    public function description(): string
    {
        return match($this) {
            self::Registered => 'Registrada',
            self::Active => 'Activo',
            self::Inactive => 'Inactivo',
        };
    }
}
