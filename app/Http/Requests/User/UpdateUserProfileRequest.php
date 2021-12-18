<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserProfileRequest extends FormRequest
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
            'firstname'=> 'string|min:3|max:30',
            'lastname'=> 'string|min:3|max:30',
            'country' => 'integer',
            'state' => 'integer',
            'email'=> 'email',
            'phone'=> 'regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'display_image' => 'file|mimes:jpeg,png|max:100000',

        ];
    }
}
