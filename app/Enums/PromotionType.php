<?php

namespace App\Enums;

use App\Interfaces\OptionsEnumInterface;
use App\Traits\UtilsTraitEnum;

enum PromotionType: string implements OptionsEnumInterface
{
    use UtilsTraitEnum;

    case Percentage = 'P';
    case Fixed = 'F';
    case Birthday = 'BD';

    public function description(): string
    {
        return match($this) {
            self::Percentage => 'Porcentaje',
            self::Fixed => 'Monto fijo',
            self::Birthday => 'Cumpleaños',
        };
    }
}
