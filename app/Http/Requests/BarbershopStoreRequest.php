<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarbershopStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name" => ['required', 'string', 'max:255'],
            "description" => ['nullable', 'string', 'max:255'],
            "phone" => ['required', 'string', 'max:20'],
            "email" => ['nullable', 'email', 'max:255'],
            "profile_picture" => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            "neighborhood" => ['required', 'string', 'max:100'],
            "department_municipality" => ['nullable', 'string', 'max:100'],
            "latitude" => ['required', 'numeric'],
            "longitude" => ['required', 'numeric'],
            "address" => ['required', 'string', 'max:255'],
            "status" => ['nullable', 'string', 'max:50'],
            "website" => ['nullable', 'string', 'max:255'],
            "instagram" => ['nullable', 'string', 'max:255'],
            "facebook" => ['nullable', 'string', 'max:255'],
            "twitter" => ['nullable', 'string', 'max:255'],
            "tiktok" => ['nullable', 'string', 'max:255'],
            "youtube" => ['nullable', 'string', 'max:255'],
            "whatsapp" => ['nullable', 'string', 'max:255'],
            "operation_key" => ['nullable', 'string', 'max:255'],
            "admin_id" => ['nullable', 'integer'],
        ];
    }
}
