<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortalRegister extends FormRequest
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
            'data.name' => 'required|string',
            'data.email' => 'required|email',
            'data.referrer' => 'required|url|unique:portals,url'
        ];
    }
    public function messages()
    {
        return [
            'data.referrer.unique' => 'This portal has already been registered.',
        ];
    }
}
