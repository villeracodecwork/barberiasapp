<?php

namespace App\Enums;

use App\Interfaces\OptionsEnumInterface;
use App\Traits\UtilsTraitEnum;

enum ActiveStatus: string implements OptionsEnumInterface
{
    use UtilsTraitEnum;

    case Active = 'active';
    case Inactive = 'inactive';

    public function description(): string
    {
        return match($this) {
            self::Active => 'Activo',
            self::Inactive => 'Inactivo',
        };
    }
}
