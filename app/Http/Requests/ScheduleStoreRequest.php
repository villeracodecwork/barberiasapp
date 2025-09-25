<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class ScheduleStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {

        return [
            
            'day_of_week' => ['required', 'array', 'min:1'],
            'day_of_week.*' => ['required', new Enum(\App\Enums\DayOfWeek::class)],
            'start_time' => ['required', 'date_format:H:i'],
            'end_time' => ['required', 'date_format:H:i', 'after:start_time'],
            'is_active' => ['sometimes', 'boolean'],
            'barber_id' => ['sometimes', 'nullable', 'exists:barbers,id'],
         
        ];
    }
}
