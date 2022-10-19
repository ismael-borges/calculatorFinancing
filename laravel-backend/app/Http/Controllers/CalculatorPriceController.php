<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCalculatorPriceFormRequest;
use App\Services\CalculatorPriceService;

class CalculatorPriceController extends Controller
{
    public function __construct(
        public CalculatorPriceService $calculatorPriceService
    ) {}

    public function store(StoreCalculatorPriceFormRequest $request)
    {
        $data = $request->json()->all();

        return $this->calculatorPriceService->calculateInstallment(
            $data['entry'],
            $data['amount'],
            $data['parcel'],
            $data['rate']
        );
    }
}
