<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

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
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'slug' => 'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/',
            'cover' => 'image|mimes:jpeg,png,jpg,svg|max:5120',
            'description' => 'required',
            'report' => 'required|mimes:pdf',
            'category_id' => 'required|exists:categories,id',
            'period_id' => 'required|exists:categories,id',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Un titre est requis.',
            'cover.image' => "Le fichier sélectionné n'est pas une image.",
            'cover.max' => "La taille de l'image est trop grande",
            'cover.mimes' => "Le fichier sélectionner doit être en format : jpeg, jpg, bmp, png.",
            'description.required' => 'Une description est requise.',
            'report.required' => "Un compte rendu est requis.",
            'report.mimes' => "Le fichier choisi n'est pas un fichier PDF.",
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug($this->input('title'))
        ]);
    }
}
