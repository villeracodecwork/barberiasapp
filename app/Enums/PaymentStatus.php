<?php

namespace App\Enums;

use App\Interfaces\OptionsEnumInterface;
use App\Traits\UtilsTraitEnum;

enum PaymentStatus: string implements OptionsEnumInterface
{
    use UtilsTraitEnum;

    case Pending = 'P';
    case Paid = 'P';
    case Overdue = 'O';

    public function description(): string
    {
        return match($this) {
            self::Pending => 'Pendiente',
            self::Paid => 'Pagado',
            self::Overdue => 'Vencido',
        };
    }
}
