<?php

namespace App\Http\Requests\Rider;

use Illuminate\Foundation\Http\FormRequest;

class CreateRiderRequest extends FormRequest
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
            'firstname'=> 'required|string|min:3|max:30',
            'lastname'=> 'required|string|min:3|max:30',
            'country' => 'required|integer',
            'state' => 'required|integer',
            'email'=> 'required|email|unique:users,email',
            'phone'=> 'required|unique:users_information,phone|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'password' => 'required|confirmed|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'password_confirmation' => 'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'display_image' => 'file|mimes:jpeg,png|max:100000'            
        ];
    }
}
