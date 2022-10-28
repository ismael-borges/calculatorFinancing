<?php

namespace App\Services;

use Carbon\Carbon;

class CalculatorPriceService
{
    public function calculateInstallment(
        ?float $entry,
        float $financingAmount,
        int $parcel,
        float $rate
    ): \Illuminate\Http\JsonResponse
    {
        $this->validateBalanceDue($financingAmount, $entry);
        $financingAmount = $entry ? $financingAmount - $entry : $financingAmount;

        $rate = ($rate/100);
        $i = pow(1 + $rate, $parcel);
        $installment = $financingAmount * ($rate * $i) / ($i - 1);

        $tablePrice = [];

        $index = 0;
        $balanceDue = $financingAmount;
        $lastDatePayment = $this->getDatePayment();
        do {
            $impost = $balanceDue * $rate;
            $amortization = $installment - $impost;

            $tablePrice[] = [
                "parcel" => $index + 1,
                "datePayment" => Carbon::parse($lastDatePayment)->format('d/m/Y'),
                "installment" => round($installment,2),
                "balanceDue" => round($balanceDue,2),
                "tax" => round($impost, 2),
                "amortization" => round($amortization,2),
            ];

            $balanceDue = $balanceDue - $amortization;
            $lastDatePayment = $this->getDatePayment($lastDatePayment);

            $index++;
        }while($index < $parcel);

        return response()->json($tablePrice);
    }

    private function getDatePayment(?String $lastDatePayment = null): String
    {
        $dt = new Carbon($lastDatePayment);
        $dt->now();
        $dt->addMonth(1);
        return $dt->startOfMonth()->format('Y-m-d');
    }

    /**
     * @param float $balanceDue
     * @param float $entry
     * @throws \Exception
     */
    private function validateBalanceDue(float $balanceDue, float $entry)
    {
        if ($entry > $balanceDue) {
            throw new \Exception("A valor de entrada não pode ser maior do que o saldo devedor");
        }
    }
}

