<?php

namespace Database\Seeders;

use App\Models\WeightUnit;
use Illuminate\Database\Seeder;

class WeightUnitSeeder extends Seeder
{
    private const KILOGRAMS = 'Kilograms';
    private const POUNDS = 'Pounds';
    private const STONES = 'Stones';

    public function run(): void
    {
        $kilograms = new WeightUnit(['name' => self::KILOGRAMS]);
        $pounds = new WeightUnit(['name' => self::POUNDS]);
        $stones = new WeightUnit(['name' => self::STONES]);

        $kilograms->save();
        $pounds->save();
        $stones->save();
    }
}
