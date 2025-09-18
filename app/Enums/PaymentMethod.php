<?php

namespace App\Enums;

use App\Interfaces\OptionsEnumInterface;
use App\Traits\UtilsTraitEnum;

enum PaymentMethod: string implements OptionsEnumInterface
{
    use UtilsTraitEnum;

    case Cash = 'E';
    case Card = 'C';
    case Transfer = 'T';
    case Other = 'O';

    public function description(): string
    {
        return match($this) {
            self::Cash => 'Efectivo',
            self::Card => 'Tarjeta',
            self::Transfer => 'Transferencia',
            self::Other => 'Otro',
        };
    }
}
