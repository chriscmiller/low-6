<?php

namespace Tests\Unit\Utilities;

use App\Utilities\WeightConverter;
use Tests\TestCase;

class WeightConverterTest extends TestCase
{
    /**
     * @test
     * @dataProvider kilogramsPoundsProvider
     */
    public function convert_kilograms_to_pounds_will_correctly_provide_values(
        bool $shouldRound,
        int $decimalPlaces,
        float $initialWeight,
        float $expected
    ): void {
        $converter = new WeightConverter(decimalPrecision: $decimalPlaces, shouldRound: $shouldRound);

        $this->assertSame(
            expected: $expected,
            actual: $converter->convertKilogramsToPounds(initialWeight: $initialWeight)
        );
    }

    /**
     * @test
     * @dataProvider poundsKilogramsProvider
     */
    public function convert_pounds_to_kilograms_will_correctly_provide_values(
        bool $shouldRound,
        int $decimalPlaces,
        float $initialWeight,
        float $expected
    ): void {
        $converter = new WeightConverter(decimalPrecision: $decimalPlaces, shouldRound: $shouldRound);

        $this->assertSame(
            expected: $expected,
            actual: $converter->convertPoundsToKilograms(initialWeight: $initialWeight)
        );
    }

    /**
     * @test
     * @dataProvider kilogramsStonesProvider
     */
    public function convert_kilograms_to_stones_will_correctly_provide_values(
        bool $shouldRound,
        int $decimalPlaces,
        float $initialWeight,
        float $expected
    ): void {
        $converter = new WeightConverter(decimalPrecision: $decimalPlaces, shouldRound: $shouldRound);

        $this->assertSame(
            expected: $expected,
            actual: $converter->convertKilogramsToStones(initialWeight: $initialWeight)
        );
    }

    /**
     * @test
     * @dataProvider stonesKilogramsProvider
     */
    public function convert_stones_to_kilograms_will_correctly_provide_values(
        bool $shouldRound,
        int $decimalPlaces,
        float $initialWeight,
        float $expected
    ): void {
        $converter = new WeightConverter(decimalPrecision: $decimalPlaces, shouldRound: $shouldRound);

        $this->assertSame(
            expected: $expected,
            actual: $converter->convertStonesToKilograms(initialWeight: $initialWeight)
        );
    }

    /**
     * @test
     * @dataProvider poundsStonesProvider
     */
    public function convert_pounds_to_stones_will_correctly_provide_values(
        bool $shouldRound,
        int $decimalPlaces,
        float $initialWeight,
        float $expected
    ): void {
        $converter = new WeightConverter(decimalPrecision: $decimalPlaces, shouldRound: $shouldRound);

        $this->assertSame(
            expected: $expected,
            actual: $converter->convertPoundsToStones(initialWeight: $initialWeight)
        );
    }

    /**
     * @test
     * @dataProvider stonesPoundsProvider
     */
    public function convert_stones_to_pounds_will_correcly_provide_values(
        bool $shouldRound,
        int $decimalPlaces,
        float $initialWeight,
        float $expected
    ): void {
        $converter = new WeightConverter(decimalPrecision: $decimalPlaces, shouldRound: $shouldRound);

        $this->assertSame(
            expected: $expected,
            actual: $converter->convertStonesToPounds(initialWeight: $initialWeight)
        );
    }

    public function kilogramsPoundsProvider(): array
    {
        return [
            '0 decimal places 20KG Without Rounding' => [
                false,
                0,
                20.0,
                44.092452437 ,
            ],
            '0 decimal places 20KG With Rounding' => [
                true,
                0,
                20.0,
                44,
            ],
            '1 decimal places 20KG With Rounding' => [
                true,
                1,
                20.0,
                44.1,
            ],
            '2 decimal places 20KG With Rounding' => [
                true,
                2,
                20.0,
                44.09,
            ],
            '0 decimal places 100KG Without Rounding' => [
                false,
                0,
                100.0,
                220.46226218500001,
            ],
            '0 decimal places 100KG With Rounding' => [
                true,
                0,
                100.0,
                220.0,
            ],
            '1 decimal places 100KG With Rounding' => [
                true,
                1,
                100.0,
                220.5,
            ],
            '2 decimal places 100KG With Rounding' => [
                true,
                2,
                100.0,
                220.46,
            ],
        ];
    }

    public function poundsKilogramsProvider(): array
    {
        return [
            '0 decimal places 20LBS Without Rounding' => [
                false,
                0,
                20.0,
                9.071847399994962,
            ],
            '0 decimal places 20LBS With Rounding' => [
                true,
                0,
                20.0,
                9,
            ],
            '1 decimal places 20LBS With Rounding' => [
                true,
                1,
                20.0,
                9.1,
            ],
            '2 decimal places 20LBS With Rounding' => [
                true,
                2,
                20.0,
                9.07,
            ],
            '0 decimal places 100LBS Without Rounding' => [
                false,
                0,
                100.0,
                45.35923699997481,
            ],
            '0 decimal places 100LBS With Rounding' => [
                true,
                0,
                100.0,
                45.0,
            ],
            '1 decimal places 100LBS With Rounding' => [
                true,
                1,
                100.0,
                45.4,
            ],
            '2 decimal places 100LBS With Rounding' => [
                true,
                2,
                100.0,
                45.36,
            ],
        ];
    }

    public function kilogramsStonesProvider(): array
    {
        return [
            '0 decimal places 20KG Without Rounding' => [
                false,
                0,
                20.0,
                3.1494608883553936,
            ],
            '0 decimal places 20KG With Rounding' => [
                true,
                0,
                20.0,
                3,
            ],
            '1 decimal places 20KG With Rounding' => [
                true,
                1,
                20.0,
                3.1,
            ],
            '2 decimal places 20KG With Rounding' => [
                true,
                2,
                20.0,
                3.15,
            ],
            '0 decimal places 100KG Without Rounding' => [
                false,
                0,
                100.0,
                15.747304441776969,
            ],
            '0 decimal places 100KG With Rounding' => [
                true,
                0,
                100.0,
                16.0,
            ],
            '1 decimal places 100KG With Rounding' => [
                true,
                1,
                100.0,
                15.7,
            ],
            '2 decimal places 100KG With Rounding' => [
                true,
                2,
                100.0,
                15.75,
            ],
        ];
    }

    public function stonesKilogramsProvider(): array
    {
        return [
            '0 decimal places 20STONE Without Rounding' => [
                false,
                0,
                20.0,
                127.00586360000001,
            ],
            '0 decimal places 20STONE With Rounding' => [
                true,
                0,
                20.0,
                127,
            ],
            '1 decimal places 20STONE With Rounding' => [
                true,
                1,
                20.0,
                127.0,
            ],
            '2 decimal places 20STONE With Rounding' => [
                true,
                2,
                20.0,
                127.01,
            ],
            '0 decimal places 100STONE Without Rounding' => [
                false,
                0,
                100.0,
                635.029318,
            ],
            '0 decimal places 100STONE With Rounding' => [
                true,
                0,
                100.0,
                635.0,
            ],
            '1 decimal places 100STONE With Rounding' => [
                true,
                1,
                100.0,
                635.0,
            ],
            '2 decimal places 100STONE With Rounding' => [
                true,
                2,
                100.0,
                635.03,
            ],
        ];
    }

    public function poundsStonesProvider(): array
    {
        return [
            '0 decimal places 20LBS Without Rounding' => [
                false,
                0,
                20.0,
                1.4285714285714286,
            ],
            '0 decimal places 20LBS With Rounding' => [
                true,
                0,
                20.0,
                1,
            ],
            '1 decimal places 20LBS With Rounding' => [
                true,
                1,
                20.0,
                1.4,
            ],
            '2 decimal places 20LBS With Rounding' => [
                true,
                2,
                20.0,
                1.43,
            ],
            '0 decimal places 100LBS Without Rounding' => [
                false,
                0,
                100.0,
                7.142857142857143 ,
            ],
            '0 decimal places 100LBS With Rounding' => [
                true,
                0,
                100.0,
                7.0,
            ],
            '1 decimal places 100LBS With Rounding' => [
                true,
                1,
                100.0,
                7.1,
            ],
            '2 decimal places 100LBS With Rounding' => [
                true,
                2,
                100.0,
                7.14,
            ],
        ];
    }

    public function stonesPoundsProvider(): array
    {
        return [
            '0 decimal places 2STONE Without Rounding' => [
                false,
                0,
                20.0,
                280.0,
            ],
            '0 decimal places 20LBS With Rounding' => [
                true,
                0,
                20.0,
                280.0,
            ],
            '1 decimal places 20LBS With Rounding' => [
                true,
                1,
                20.0,
                280.0,
            ],
            '2 decimal places 20LBS With Rounding' => [
                true,
                2,
                20.0,
                280.00,
            ],
            '0 decimal places 100LBS Without Rounding' => [
                false,
                0,
                100.0,
                1400.0,
            ],
            '0 decimal places 100LBS With Rounding' => [
                true,
                0,
                100.0,
                1400,
            ],
            '1 decimal places 100LBS With Rounding' => [
                true,
                1,
                100.0,
                1400.0,
            ],
            '2 decimal places 100LBS With Rounding' => [
                true,
                2,
                100.0,
                1400.00,
            ],
        ];
    }
}
