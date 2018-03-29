<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{
    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes ()
    {
        return [
            //
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize ()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages ()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules ()
    {
        return [
            'name' => 'required|min:2|max:255',
        ];
    }
}
