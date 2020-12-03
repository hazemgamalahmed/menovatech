<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name' => 'required',
            'pics' => 'required|url',
            'description' => 'required'
        ];
    }

    public function messages(){
        return [
            'name' => 'sorry please enter the name of the project',
            'pics' => 'please enter any image be explain the project',
            'description' => 'please enter the description'
        ];
    }
}
