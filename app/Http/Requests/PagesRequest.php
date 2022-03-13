<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PagesRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    
// zasady walidacji
    public function rules()
    {
        return [
            
            'name' => 'required|max:255',
            'code' => 'required|min:8|max:8|unique:komponents,code,'.$this->id,
            'que' => 'required|numeric|between:0,999999999',
            'location' => 'required|max:255|unique:komponents,location,'.$this->id

            
        ];
    }

// wiadomosci walidacji
    public function messages(){
        return [

            'name.required' => 'Pole nazwa jest wymagane.',
            'code.required' => 'Pole kod jest wymagane.',
            'code.min' => 'Pole kod musi miec 8 znakow.',
            'code.max' => 'Pole kod musi miec 8 znakow.',
            'code.unique' => 'Taki kod już istnieje.',
            'que.required' => 'Pole ilość jest wymagane.',
            'que.numeric' => 'Pole ilość musi być liczba.',
            'que.between' => 'Ilość musi być dodatnia.',
            'location.required' => 'Pole lokacja jest wymagane.',
            'location.unique' => 'Ta lokacja jest już zajęta'   

        ];
    }
}
