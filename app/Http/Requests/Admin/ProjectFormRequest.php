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
        $rules = [
            'title' => 'required',
            'slug' => 'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/',
            'cover' => 'image|mimes:jpeg,png,jpg,svg|max:5120',
            'category_id' => 'required|exists:categories,id',
            'period_id' => 'required|exists:periods,id',
        ];

        if ($this->isMethod('post')) {
            $rules['report'] = 'required|mimes:pdf';
        } else {
            // Si c'est une mise à jour, le report est optionnel
            $rules['report'] = 'nullable|mimes:pdf';
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Un titre est requis.',
            'cover.image' => "Le fichier sélectionné n'est pas une image.",
            'cover.max' => "La taille de l'image est trop grande.",
            'cover.mimes' => "Le fichier sélectionné doit être en format : jpeg, jpg, bmp, png.",
            'report.required' => "Un compte rendu est requis.",
            'report.mimes' => "Le fichier choisi n'est pas un fichier PDF.",
            'category_id.required' => 'Une catégorie est requise.',
            'category_id.exists' => 'La catégorie sélectionnée est invalide.',
            'period_id.required' => 'Une période de réalisation est requise.',
            'period_id.exists' => 'La période de réalisation sélectionnée est invalide.',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug($this->input('title'))
        ]);
    }
}
