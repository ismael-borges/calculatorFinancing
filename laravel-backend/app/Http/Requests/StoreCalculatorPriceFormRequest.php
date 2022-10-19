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
            'amount.required' => 'O parâmetro amount é obrigatório.',
            'parcel.min' => 'O parâmetro parcel o valor mínimo deve ser 1.',
            'parcel.max' => 'O parâmetro parcel não pode ser maior do que 100.',
            'parcel.required' => 'O parâmetro parcel é obrigatório.',
            'rate.max' => 'O parâmetro rate não pode ser maior do que 5.',
            'rate.min' => 'O parâmetro rate o valor mínimo deve ser 1.',
            'rate.required' => 'O parâmetro rate é obrigatório.',
        ];
    }
}
