<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'places' => 'required|max:255',
            'location' => 'required|max:255'
            
        ];
    }
    public function messages()
    {
        return[
            'places.required' => 'Pole nazwa jest wymagane.',
            'location.required' => 'Pole kod jest wymagane.',
        ];
        
    }
}
