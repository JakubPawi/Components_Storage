<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

// zasady walidacji
    public function rules()
    {
        return [
            
            'klient' => 'required',
            'miasto' => 'required',
            'typ' => 'required',
            'ilosc' => 'required|numeric|between:0,999999999',
            'numer' => 'required',
            'waga' => 'required|numeric|between:0,999999999',
            'cena' => 'required|numeric|between:0,999999999'
        ];
    }

// wiadomosci walidacji
    public function messages(){
        return [

            'klient.required' => 'Pole klient jest wymagane.',
            'miasto.required' => 'Pole miasto jest wymagane.',
            'typ.required' => 'Pole typ jest wymagane.',
            'ilosc.required' => 'Pole ilosc jest wymagane.',
            'ilosc.between' => 'Ilość musi być dodatnia.',
            'numer.required' => 'Pole numer jest wymagane.',
            'waga.between' => 'Waga musi być dodatnia.',
            'cena.between' => 'Cena musi być dodatnia.',
            'cena.numeric' => 'Cena musi być liczba.',
            'waga.numeric' => 'Waga musi być liczba.',
            'waga.required' => 'Pole waga jest wymagane.',
            'cena.required' => 'Pole cena jest wymagane.'

        ];
    }
}
