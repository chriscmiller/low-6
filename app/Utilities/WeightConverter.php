<?php

namespace App\Utilities;

class WeightConverter
{
    private const KILOGRAMS_POUNDS = 2.20462262185;

    private const KILOGRAMS_STONES = 6.35029318;

    private const POUNDS_STONES = 14;

    public function __construct(private float $decimalPrecision = 2, private bool $shouldRound = true)
    {
    }

    private function getReturnValue(float $calculation): float
    {
        if ($this->shouldRound === false) {
            return $calculation;
        }

        return round(num: $calculation, precision: $this->decimalPrecision);
    }

    public function convertKilogramsToPounds(float $initialWeight): float
    {
        $calculation = $initialWeight * self::KILOGRAMS_POUNDS;

        return $this->getReturnValue($calculation);
    }

    public function convertPoundsToKilograms(float $initialWeight): float
    {
        $calculation = $initialWeight / self::KILOGRAMS_POUNDS;

        return $this->getReturnValue($calculation);
    }

    public function convertKilogramsToStones(float $initialWeight): float
    {
        $calculation = $initialWeight / self::KILOGRAMS_STONES;

        return $this->getReturnValue($calculation);
    }

    public function convertStonesToKilograms(float $initialWeight): float
    {
        $calculation = $initialWeight * self::KILOGRAMS_STONES;

        return $this->getReturnValue($calculation);
    }

    public function convertPoundsToStones(float $initialWeight): float
    {
        $calculation = $initialWeight / self::POUNDS_STONES;

        return $this->getReturnValue($calculation);
    }

    public function convertStonesToPounds(float $initialWeight): float
    {
        $calculation = $initialWeight * self::POUNDS_STONES;

        return $this->getReturnValue($calculation);
    }
}
