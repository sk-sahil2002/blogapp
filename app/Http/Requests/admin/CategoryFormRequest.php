<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name'=> [
                'required',
                'string',
                'max:200'
            ],
            'slug'=> [
                'required',
                'string',
                'max:200'
            ],
            'Description'=> [
                'required',
            ],
            'image'=> [
                'required',
                'mimes:jpeg,jpg,png'
            ],
            'meta_title'=> [
                'required',
                'string',
                'max:200'
            ],
            'meta_description'=> [
                'required',
                'string',
            ],
            'meta_keyword'=> [
                'required',
                'string',
            ],
            'navbar_status'=> [
                'required',
                'boolen',
            ],
            'status'=> [
                'required',
                'boolen',
            ],

        ];

        return $rules;
    }
}
