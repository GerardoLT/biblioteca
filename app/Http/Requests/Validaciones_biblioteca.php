<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validaciones_biblioteca extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'ISBN' =>'required|Min:13|int',
            'titulo' =>'required',
            'Autor'  =>'required',
            'Paginas' =>'required|int',
            'editorial' =>'required',
            'Mail_Editorial'  =>'required|email',
        ];
    }
}
