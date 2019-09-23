<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MerchRequest extends FormRequest
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
            'id' => 'sometimes|required|integer',
            'name' => 'required|string|max:255',
            'cost' => 'required|integer|between:0,65535',
            'stock' => 'required|integer|between:0,65535',
        ];
    }
}
