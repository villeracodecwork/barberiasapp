<?php

namespace App\Http\Requests;

use App\Enums\ServiceCategory;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class ServiceStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {

        return [
            "category" => ['required', new Enum(ServiceCategory::class)],
            "name" => ['required', 'string', 'max:100'],
            "description" => ['nullable', 'string', 'max:255'],
            "duration_minutes" => ['required', 'integer', 'min:1'],
            "price" => ['required', 'numeric', 'min:0'],
            "profile_picture" => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            "is_active" => ['nullable', 'boolean'],
            "barber_ids" => ['nullable', 'array'],
            "barber_ids.*" => ['integer', 'exists:barbers,id'],
        ];
    }
}
