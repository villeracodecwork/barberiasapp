<?php

namespace App\Interfaces;

interface OptionsEnumInterface
{
    public static function selectOptions($selected, $optionClass = '');

    public function description(): string;
}
