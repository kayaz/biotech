<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TechnologyFormRequest extends FormRequest
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
            'name' => 'required|string|min:5|max:190|unique:technology,name,'.$this->route()->name,
            'desc' => 'required|string|min:5',
            'text' => 'required|string|min:5',
            'file_alt' => '',
            'meta_title' => '',
            'meta_description' => '',
            'meta_robots' => '',
            'lang'
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
            'name.required' => 'To pole jest wymagane',
            'name.unique' => 'Taki wpis już istnieje',
            'name.max.string' => 'Maksymalna ilość znaków: 100',
            'name.min.string' => 'Minimalna ilość znaków: 5',
            'desc.required' => 'To pole jest wymagane',
            'text.required' => 'To pole jest wymagane',
        ];
    }

}
