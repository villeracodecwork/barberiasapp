<?php

namespace App\Enums;

use App\Interfaces\OptionsEnumInterface;
use App\Traits\UtilsTraitEnum;

enum ServiceCategory: string implements OptionsEnumInterface
{
    use UtilsTraitEnum;

    case Haircut = 'haircut';
    case Beard = 'beard';
    case Color = 'color';
    case Other = 'other';

    public function description(): string
    {
        return match($this) {
            self::Haircut => 'Corte',
            self::Beard => 'Barba',
            self::Color => 'Color',
            self::Other => 'Otro',
        };
    }
}
