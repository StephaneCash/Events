<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEvent extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'description' => 'required|min:5',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Vous devez entrer un titre',
            'title.min' => 'Vous devez entrer un titre de caractères minimum de 3 caractères',
            'description.required' => 'Vous devez entrer une descripcion',
            'description.min' => 'Vous devez entrer au minimum 3 caractères de description'
        ];
    }
}
