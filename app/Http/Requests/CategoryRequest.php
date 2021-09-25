<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name'=>'required|min:3',
            'description'=>'required|min:3',
            'type'=>'required',
            'status'=>'required'
        ];
    }
    // public function messages()
    // {
    //     return [
    //         'name.required'=>'Vai name field ta den',
    //         'name.min'=>'vai minimum 3 character den'
    //     ];
    // }
}
