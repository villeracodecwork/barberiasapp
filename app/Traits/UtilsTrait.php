<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Arr;

trait UtilsTraitEnum
{
    public static function selectOptions($selected, $optionClass = '')
    {
        $options = '';
        foreach (self::cases() as $enum) {
            $options .= '<option value="' . $enum->value . '"';

            if ($selected == $enum->value) {
                $options .= ' selected';
            }

            if ($optionClass != '') {
                $options .= ' class="' . $optionClass . '"';
            }

            $options .= '>' . $enum->description() . '</option>';
        }

        return $options;
    }

    public static function toSelectArray($array = null): array
    {
        $result = [];
        $cases = self::cases();
        foreach ($cases as $case) {
            if ($array == null) {
                $result[$case->value] = $case->description();
            }
            if ($array != null && in_array($case->value, $array)) {
                $result[$case->value] = $case->description();
            }
        }

        return $result;
    }

    public static function ArrayValues(): array
    {
        $values = [];
        foreach (self::cases() as $enum) {
            array_push($values, $enum->value);
        }

        return $values;
    }

    public static function getByName($name): self
    {
        foreach (self::cases() as $enum) {
            if ($enum->name == $name) {
                return  $enum;
            }
        }
    }

    public static function pickRandom()
    {
        $valuesEnum = self::ArrayValues();
        $index = array_rand($valuesEnum);

        return  $valuesEnum[$index];
    }

    public static function getCasesExceptValues(bool $return_cases, array $exceptions = [])
    {
        $result = [];
        foreach (self::cases() as $case) {
            if (! in_array($case->value, $exceptions)) {
                $result[] = $return_cases ? $case : $case->value;
            }
        }

        return $result;
    }

    public static function getOnlyCasesValue(array $values = []): array
    {
        $result = [];
        foreach (self::cases() as $case) {
            if (in_array($case->value, $values)) {
                $result[] = $case;
            }
        }

        return $result;
    }

    public static function getValuesByFunction($function_name)
    {
        $result = [];
        foreach (self::cases() as $case) {
            try {
                $result[$case->name] = $case->{$function_name}();
            } catch (\Throwable $th) {
            }
        }

        return $result;
    }

    public static function getNamesByFunction($function_name)
    {
        $result = [];

        foreach (self::cases() as $case) {
            try {
                $result[$case->{$function_name}()] = $case->name;
            } catch (\Throwable $th) {
            }
        }

        return  $result;
    }

    public static function fromName(string $name)
    {
        try {
            return constant("self::$name");
        } catch (\Throwable $th) {
            return null;
        }
    }

    /**
     * Get enum from function value.
     *
     * @param mixed $value Value
     *
     * @return enum|null
     */
    public static function fromFunctionValue($function, $value)
    {
        $values = self::getValuesByFunction($function);

        return self::fromName(array_search($value, $values));
    }

    /**
     * conocer si el enum contiene un valor.
     */
    public static function hasValue($value): bool
    {
        return in_array($value, self::ArrayValues());
    }

    /**
     * obtener el enum por su valor.
     */
    public static function getForValue($value)
    {
        foreach (self::cases() as $case) {
            if ($case->value == $value) {
                return $case;
            }
        }
    }

    /**
     * imprimir  la descripcion del enum en mayúscula.
     */
    public function upperDescription(): string
    {
        return mb_strtoupper($this->description(), 'UTF-8');
    }

    /**
     * Devuelve todos los casos en forma de array junto a los valores de las funciones que se indiquen
     */
    public static function toArray(array $functions = []): array
    {
        $data = [];

        foreach (self::cases() as $case) {
            $case_data = [
                'name' => $case->name,
                'value' => $case->value,
                'description' => $case->description(),
            ];

            foreach ($functions as $function) {
                $levels = explode('.', $function);
                $first_level = $levels[0];

                $return_function = $case->{$first_level}();

                if (! is_string($return_function) || (is_string($return_function) && ! class_exists($return_function))) {
                    $case_data[$first_level] = $return_function;
                    continue;
                }

                // Es un ENUM
                $remaining_levels = count($levels) > 1 ? Arr::except($levels, 0) : [];
                $remaining_levels = implode('.', $remaining_levels);

                $case_data[$first_level] = $return_function::toArray($remaining_levels !== '' ? [$remaining_levels] : []);
            }

            $data[$case->name] = $case_data;
        }

        return $data;
    }

    /**
     * obetener el enum por su descripcion sin importar que sea mayúscula o minúscula.
     */
    public static function fromDescription($description)
    {
        foreach (self::cases() as $case) {
            if (strtolower($case->description()) == strtolower($description)) {
                return $case;
            }
        }
    }

    /**
     * obtener un array de las descripciones de los enums
     */
    public static function getArrayDescriptions(): array
    {
        $descriptions = [];
        foreach (self::cases() as $case) {
            $descriptions[] = $case->description();
        }

        return $descriptions;
    }

    public function isVisibleForView(): bool
    {
        return match ($this) {
            default => true,
        };
    }

    /**
     * obtener los enums que son visibles para una vista
     */
    public static function getVisibleEnums()
    {
        $visibleEnums = [];
        foreach (self::cases() as $case) {
            if ($case?->isVisibleForView()) {
                $visibleEnums[] = $case;
            }
        }

        return $visibleEnums;
    }

    /**
     *  Convertir una fecha en formato string a un objeto Carbon.
     */
    public static function parseToCarbon(?string $date): ?Carbon
    {
        if (empty($date)) {
            return null;
        }

        // Lista de formatos comunes que Carbon puede entender
        $formats = [
            'Y-m-d\TH:i:sP',
            'Y-m-d H:i:s',
            'Y-m-d',
            'd/m/Y',
            'd-m-Y',
            'm/d/Y',
            'd M Y',
            'd M Y H:i:s',
            'd-m-Y H:i:s',
            'd/m/Y H:i:s',
            'm/d/Y H:i:s',
            'Ymd',
            'dmY',
            'Y-m-d\TH:i:s',
        ];

        foreach ($formats as $format) {
            try {
                return Carbon::createFromFormat($format, $date);
            } catch (\Exception $e) {
                // continuar al siguiente formato
            }
        }

        // Si ninguno de los formatos funcionó, intentamos parsear de forma automática
        try {
            return Carbon::parse($date);
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Intenta obtener un enum por su valor sin importar mayúsculas o minúsculas.
     *
     * @param string $value Valor del enum
     * @return self|null Enum correspondiente o null si no se encuentra
     */
    public static function tryFromInsensitive(string $value): ?self
    {
        foreach (self::cases() as $case) {
            if (strtolower($case->value) === strtolower($value)) {
                return $case;
            }
        }

        return null;
    }
}
