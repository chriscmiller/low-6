<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Traits\MigrationHelpers;

class CreateHorsesTable extends Migration
{
    use MigrationHelpers;

    private const TABLE_NAME = 'horses';

    public function up(): void
    {
        $this->createTableIfNotExists(
            tableName: self::TABLE_NAME,
            callback: function (Blueprint $table): void {
                $table->id();

                $table->string('name')
                    ->comment('The name of the horse')
                    ->nullable(false);

                $table->integer('bred_country_id')
                    ->comment('The country in which the horse was bred')
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
