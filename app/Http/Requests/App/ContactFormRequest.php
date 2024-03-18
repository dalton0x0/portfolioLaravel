<?php

namespace App\Http\Requests\App;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Un nom est requis.',
            'name.min' => 'Votre nom complet doit contenir au moins :min caractères.',
            'email.required' => 'Une adresse mail est requise.',
            'email.email' => 'Veuillez saisir une adresse mail valide.',
            'message.required' => 'Un message est requis.',
            'message.min' => 'Votre message doit contenir au moins :min caractères.',
        ];
    }
}
