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
            'company'   =>  'string',
            'website'   =>  'string|min:3',
            'project_type'  =>  'required|string',
            'project_timeframe' =>  'required|string',
            'project_budget'    =>  'required|string',
            'project_description'   =>  'required|string|min:10',
            'clones'    =>  'string',
            'likes'    =>  'string',
            'dont_like'  =>  'string',
            'redesign'  =>  'string',
            'components'    =>  'string',
            'host'   =>  'string',
            'servers'   =>  'string',
            'server_os'    =>  'string',
            'workstations'  =>  'string',
            'ownership'    =>  'string',
        ];
    }

    public function messages() 
    {
        return [
            'type'   =>  'The Project Type field is required',
        ];  
    } // messages
}
