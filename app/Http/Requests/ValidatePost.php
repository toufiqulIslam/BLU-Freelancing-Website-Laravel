<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePost extends FormRequest
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
            'uname.required' => 'Fullname is Required',
            'email.required' => 'Email is Required',
            'email.unique' => 'This Email is already used',
            'password.required' => 'Password is Required',
            'password.unique' => 'Please Choose an unique password',
            'dob.required' => 'Date of Birth is Required',
            'gender.required' => 'Gender is Required',
            'cardNumber.required' => 'Card Number is Required Field',
            'cardCVC.required' => 'Card CVC is Required Field',
            'expire.required' => 'Card Expire Date is Required',
            'agree.required' => 'You Need To Accept Our Terms and Conditions'
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

            "uname"  => "required",
            "email"     => "required | unique:users,email",
            "password"  => "required | min:6 | unique:users,password",
            "dob" => "required",
            "gender" => "required",
            "cardNumber" => "required | min:10 ",
            "cardCVC" => "required | min:3 | max:4",
            "expire" => "required",
            "agree" => "required"
        ];
    }
}
