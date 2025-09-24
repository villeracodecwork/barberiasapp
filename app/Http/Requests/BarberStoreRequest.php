<?php

namespace App\Http\Requests;

use App\Enums\IdentificationType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class BarberStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {

        return [
            "identification_type" => ['required', new Enum(IdentificationType::class)],
            "identification_number" => ['required', 'string', 'max:50'],
            "name" => ['required', 'string', 'max:100'],
            "last_name" => ['nullable', 'string', 'max:100'],
           
            'phone'=>['required', 'string', 'max:20'],
            'verification_code'=>['nullable', 'string', 'max:100'],
            'email'=>['nullable', 'email', 'max:255'],
            'email_verified_at'=>['nullable', 'date'],
            'birth_date'=>['nullable', 'date'],
            'address'=>['nullable', 'string', 'max:255'],
            'profile_picture'=>['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],

            'nickname'=>['nullable', 'string', 'max:50'],
            'is_active'=>['nullable', 'boolean'],
            'description'=>['nullable', 'string', 'max:255'],
        ];
    }
}
