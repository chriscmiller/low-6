<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Database\Traits\RequiresJsonData;
use Exception;

class CountriesSeeder extends Seeder
{
    use RequiresJsonData;

    private const DATA_FILE = 'Countries.json';

    /**
     * @throws Exception
     */
    public function run()
    {
        $countries = $this->getJsonDataAsArray(filename: self::DATA_FILE);

        foreach ($countries as $countryData) {
            $country = new Country($countryData);
            $country->save();
        }
    }
}
