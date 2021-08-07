<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Traits\MigrationHelpers;

class CreateRaceHorseJockeyStatisticsTable extends Migration
{
    use MigrationHelpers;

    private const TABLE_NAME = 'race_horse_jockey_statistics';

    public function up(): void
    {
        $this->createTableIfNotExists(
            tableName: self::TABLE_NAME,
            callback: function (Blueprint $table) {
                $table->id();

                $table->integer('race_id')
                    ->comment('The race id to which this statistic is attached')
                    ->nullable(false);

                $table->integer('horse_id')
                    ->comment('The horse id to which this statistic is attached')
                    ->nullable(false);

                $table->integer('jockey_id')
                    ->comment('The jockey id to which this statistic is attached')
                    ->nullable(false);

                $table->string('allowance_weight')
                    ->comment('The allowance weight for this jockey')
                    ->nullable(false);

                $table->integer('weight_unit_id')
                    ->comment('The weight unit for the allowance')
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
