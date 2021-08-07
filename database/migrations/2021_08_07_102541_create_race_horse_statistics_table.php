<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Traits\MigrationHelpers;

class CreateRaceHorseStatisticsTable extends Migration
{
    use MigrationHelpers;

    private const TABLE_NAME = 'race_horse_statistics';

    public function up(): void
    {
        $this->createTableIfNotExists(
            tableName: self::TABLE_NAME,
            callback: function (Blueprint $table): void {
                $table->id();

                $table->integer('race_id')
                    ->comment('The race id to which this statistic is attached')
                    ->nullable(false);

                $table->integer('horse_id')
                    ->comment('The horse id to which this statistic is attached')
                    ->nullable(false);

                $table->integer('weight')
                    ->comment('The weight value for this race')
                    ->nullable(false);

                $table->integer('weight_unit_id')
                    ->comment('The weight unit for the associated weight')
                    ->nullable(false);

                $table->integer('cloth_number')
                    ->comment('The cloth number this horse is allocated')
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
