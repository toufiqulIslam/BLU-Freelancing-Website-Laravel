<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUpdate extends FormRequest
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
            'company.required' => 'Company name is Required',
            'username.required' => 'Username is Required',
            'email.required' => 'Email is Required',
            'password.required' => 'Password is Required',
            'dob.required' => 'Date of Birth is Required',
            'gender.required' => 'Gender is Required',
            'cardNumber.required' => 'Card Number is Required Field',
            'cardCVC.required' => 'Card CVC is Required Field',
            'expire.required' => 'Card Expire Date is Required',
            'security.required' => 'Security Question Answer is Required'
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
            "company" => "required",
            "username"  => "required",
            "email"     => "required",
            "password"  => "required | min:6",
            "dob" => "required",
            "gender" => "required",
            "cardNumber" => "required | min:10 ",
            "cardCVC" => "required | min:3 | max:4",
            "expire" => "required",
            "security" => "required"
        ];
    }
}
