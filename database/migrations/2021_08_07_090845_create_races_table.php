<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Traits\MigrationHelpers;

class CreateRacesTable extends Migration
{
    use MigrationHelpers;

    private const TABLE_NAME = 'races';

    public function up(): void
    {
        $this->createTableIfNotExists(
            tableName: self::TABLE_NAME,
            callback: function (Blueprint $table): void {
                $table->id();

                $table->integer('race_meeting_id')
                    ->comment('The race meeting for which this race is relevant')
                    ->nullable(false);

                $table->timestamp('time')
                    ->comment('The time in UTC for this race')
                    ->nullable(false);

                $table->boolean('is_handicap')
                    ->comment('Is this a handicap race')
                    ->nullable(false)
                    ->default(true);

                $table->boolean('is_trifecta')
                    ->comment('Is this a trifecta race')
                    ->nullable(false)
                    ->default(false);

                $table->boolean('is_showcase')
                    ->comment('Is this a showcase race')
                    ->nullable(false)
                    ->default(false);

                $table->timestamps();
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists(table: self::TABLE_NAME);
    }
}
