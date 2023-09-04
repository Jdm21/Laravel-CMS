<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            
            'title' => 'required|min:3',
            'subtitle' => 'required|min:3',
            'text' => 'required|min:10',
            


        ];
    }

    public function messages()
    {
        return [
            
            'title.required' => 'Titulo é obrigátorio',
            'title.min' => 'Titulo tem que ter no minimo 3 linhas',
            'subtitle.required' => 'O subtitulo é obrigátorio',
            'subtitle.min' => 'O subtitulo tem que ter no minimo 3 linhas',
            'text.required' => 'O texto é obrigátorio',
            'text.min' => 'O texto tem que ter no minimo 10 linhas',

        ];

    }  
}
