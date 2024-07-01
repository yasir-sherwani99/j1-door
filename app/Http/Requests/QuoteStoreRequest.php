<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\RecaptchaRule;

class QuoteStoreRequest extends FormRequest
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
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'email' => 'required|email',
            'phone' => 'required|max:191',
            'zip' => 'required|max:191',
            'product_type' => 'required',
            'service_type' => 'required',
            'description' => 'required|min:10',
            'g-recaptcha-response' => ['required', new RecaptchaRule]
        ];
    }
}
