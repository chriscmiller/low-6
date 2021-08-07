<?php

namespace Database\Traits;

use Illuminate\Support\Collection;
use Exception;
use Illuminate\Support\Facades\Log;
use Throwable;

trait RequiresJsonData
{
    /**
     * @throws Exception
     */
    public function getJsonDataAsArray(string $filename): array
    {
        $jsonString = file_get_contents(filename: database_path() . '/seeders/JSONS/' . $filename);

        if ($jsonString === false) {
            throw new Exception(message: "Unable to read data from JSON file $filename");
        }

        try {
            $jsonData = json_decode(
                json: $jsonString,
                associative: true,
                flags: JSON_THROW_ON_ERROR
            );
        } catch (Throwable $exception) {
            Log::error(message: $exception->getMessage());

            throw new Exception(message: "Unable to decode data from JSON file $filename");
        }

        return $jsonData;
    }
}
