<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LongForm extends FormRequest
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
            'name'  =>  'required|string|min:2',
            'email' => 'required|email',
            'phone' => 'required',
            'contact_method' => 'required|string',
            'company'   =>  'nullable|string',
            'website'   =>  'nullable|string|min:6',
            'project_type'  =>  'required|string',
            'project_timeframe' =>  'required|string',
            'project_budget'    =>  'required|string',
            'project_description'   =>  'required|string|min:10',
            'clones'    =>  'nullable|string',
            'likes'    =>  'nullable|string',
            'dont_like'  =>  'nullable|string',
            'redesign'  =>  'nullable|boolean',
            'components'    =>  'nullable|boolean',
            'host'   =>  'nullable|boolean',
            'servers'   =>  'nullable|string',
            'server_os'    =>  'nullable|string',
            'workstations'  =>  'nullable|string',
            'ownership'    =>  'nullable|string',
        ];
    }

    public function messages() 
    {
        return [
            'type'   =>  'The Project Type field is required',
        ];  
    } // messages
}
