<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DistributorStoreRequest extends FormRequest
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
            'name' => 'required|string|max:191',
            'category' => 'required|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|max:191',
            'website' => 'nullable|url|max:191',
            'address' => 'required|string|max:191',
            'latitude' => 'required',
            'longitude' => 'required',
            'description' => 'nullable'
        ];
    }
}
