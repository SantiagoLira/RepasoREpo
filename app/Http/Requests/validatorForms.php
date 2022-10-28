<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validatorForms extends FormRequest
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
            'txtISBN' => 'required | numeric | Min:13 ',
            'txtAutor' => 'required',
            'txtEditorial' => 'required',
            'txtTitulo' => 'required',
            'txtPaginas' => 'required | numeric',
            'txtEmailEditorial' => 'required | email',
        ];
    }
}


