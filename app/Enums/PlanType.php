<?php

namespace App\Enums;

use App\Interfaces\OptionsEnumInterface;
use App\Traits\UtilsTraitEnum;

enum PlanType: string implements OptionsEnumInterface
{
    use UtilsTraitEnum;

    case Monthly = 'M';
    case Yearly = 'Y';
    case Special = 'S';

    public function description(): string
    {
        return match($this) {
            self::Monthly => 'Mensual',
            self::Yearly => 'Anual',
            self::Special => 'Especial',
        };
    }
}
