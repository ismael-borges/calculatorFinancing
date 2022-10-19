<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCalculatorPriceFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "amount" => 'required',
            "parcel" => 'required|integer|min:1|max:100',
            "rate" => 'required|integer|min:1|max:5',
        ];
    }

    public function messages()
    {
        return [
            'amount.required' => 'O valor é obrigatório.',
            'parcel.min' => 'Quantidade de meses o valor mínimo deve ser 1.',
            'parcel.max' => 'Quantidade de meses não pode ser maior do que 100.',
            'parcel.required' => 'Quantidade de meses é obrigatório.',
            'rate.max' => 'A taxa de juros não pode ser maior do que 5.',
            'rate.min' => 'A taxa de juros o valor mínimo deve ser 1.',
            'rate.required' => 'A taxa de juros é obrigatória.',
        ];
    }
}
