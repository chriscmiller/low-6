<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Traits\MigrationHelpers;

class CreateCountriesTable extends Migration
{
    use MigrationHelpers;

    private const TABLE_NAME = 'countries';

    public function up(): void
    {
        $this->createTableIfNotExists(
            tableName: self::TABLE_NAME,
            callback: function (Blueprint $table): void {
                $table->id();

                $table->string('name')
                    ->comment('The name of the country')
                    ->nullable(false);

                $table->string('abbreviation')
                    ->comment('The abbreviation of the country')
                    ->nullable(true)
                    ->default(null);

                $table->string('code')
                    ->comment('The two letter country code')
                    ->nullable(false);

                $table->timestamps();
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists(table: self::TABLE_NAME);
    }
}
