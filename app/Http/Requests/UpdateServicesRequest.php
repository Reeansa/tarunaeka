<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServicesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'images' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'name' => 'nullable|required|string',
            'description' => 'nullable|string',
            'capacity' => 'nullable|integer',
            'pressure' => 'nullable|integer',
            'fuel' => 'nullable|string',
        ];
    }
}
