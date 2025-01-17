<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
                'email' => ['required', 'email'],
                'password' => ['required', 'min:6', 'max:10'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Email Required! Please enter your email.',
            'email.email' => 'Invalid Email Format! Please enter the right format.',
            'password.required' => 'Password Required! Please enter your password.'
        ];
        
    }
}
