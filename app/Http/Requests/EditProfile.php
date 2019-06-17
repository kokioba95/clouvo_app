<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class EditProfile extends FormRequest
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
            'group_name' => 'required|max:255',
            'email' => 'email|max:255',
            'password'    => 'required|min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ];
    }
}