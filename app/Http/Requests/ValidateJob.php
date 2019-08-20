<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateJob extends FormRequest
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

    public function messages(){

        return [
            'category.required' => 'Company name is Required',
            'skills.required' => 'Skill is Required',
            'deadline.required' => 'Deadline is Required',
            'salary.required' => 'Salary is Required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "category" => "required",
            "skills"  => "required",
            "deadline"     => "required",
            "salary"  => "required",
        ];
    }
}
