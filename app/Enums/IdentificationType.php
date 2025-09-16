<?php

namespace App\Enums;

use App\Interfaces\OptionsEnumInterface;
use App\Traits\UtilsTraitEnum;

/**
 */
enum IdentificationType : string implements OptionsEnumInterface
{
    use UtilsTraitEnum;

    case Cedula = 'C';
    case Nit = 'N';
    case TarjetaIdentidad = 'T';
    case Pasaporte = 'P';
    case Extranjeria = 'E';
    case Diplomatico = 'D';
    case CVenezolana = 'V';
    case RegistroCivil = 'U';
    case CEcuatoriana = 'F';
    case PPT = 'PPT';


    public function description(): string
    {
        return match ($this) {
            IdentificationType::Cedula => 'Cédula de ciudadanía',
            IdentificationType::Nit => 'Nit',
            IdentificationType::TarjetaIdentidad => 'Tarjeta de identidad',
            IdentificationType::Pasaporte => 'Pasaporte',
            IdentificationType::Extranjeria => 'Cedula de extranjeria',
            IdentificationType::Diplomatico => 'Carnet diplomatico',
            IdentificationType::CVenezolana => 'Cedula venezolana',
            IdentificationType::CEcuatoriana => 'Cedula ecuatoriana',
            IdentificationType::RegistroCivil => 'Registro civil',
            IdentificationType::PPT => 'Permiso por protección temporal',
        };
    }

    public function shortDescription(): string
    {
        return match ($this) {
            IdentificationType::Cedula => 'CC',
            IdentificationType::Nit => 'NIT',
            IdentificationType::TarjetaIdentidad => 'TI',
            IdentificationType::Pasaporte => 'PA',
            IdentificationType::Extranjeria => 'CCE',
            IdentificationType::Diplomatico => 'CD',
            IdentificationType::CVenezolana => 'CCV',
            IdentificationType::CEcuatoriana => 'CCE',
            IdentificationType::RegistroCivil => 'RC',
            IdentificationType::PPT => 'PPT',
        };
    }




    /**
     * Obtiene un objeto enum a partir de su valor y si no lo encuentra retorna cédula por defecto.
     */
    public static function getByValue($value):self
    {
        foreach (self::cases() as $enum) {
            if ($enum->value == $value) {
                return  $enum;
            }
        }

        return self::Cedula;
    }
}
