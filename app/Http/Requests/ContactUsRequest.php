<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
{
    protected $redirect = '/#contact';

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
            'name' => 'required|string',
            'email' => 'required|email',
            'emailConfirm' => 'bail|size:0',
            'message' => 'required|string',
            'robot' => 'required|in:no,No,Nope,nope',
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
            'emailConfirm.size' => 'Please complete all fields',
            'robot.required' => 'Please confirm you are not a robot',
            'robot.in' => 'Please confirm you are not a robot',
        ];
    }
}
