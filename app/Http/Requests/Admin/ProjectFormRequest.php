<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProjectFormRequest extends FormRequest
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
            'title' => 'required',
            //'content' => 'required',
            'cover' => 'image|max:2048',
            'report' => 'required',
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
            'title.required' => 'Un titre est requis.',
            //'content.required' => 'Un contenu est requis.',
            'cover.image' => "Le fichier sélectionné n'est pas une image.",
            'cover.max' => "La taille de l'image est trop grande",
            'report.mimetypes' => "Le fichier sélectionné n'est pas un fichier pdf.",
            'report.required' => "Un compte rendu est requis.",
        ];
    }
}
