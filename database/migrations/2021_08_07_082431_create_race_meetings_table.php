<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Traits\MigrationHelpers;

class CreateRaceMeetingsTable extends Migration
{
    use MigrationHelpers;

    private const TABLE_NAME = 'race_meetings';

    public function up(): void
    {
        $this->createTableIfNotExists(
            tableName: self::TABLE_NAME,
            callback: function (Blueprint $table): void {
                $table->id();

                $table->integer('racecourse_id')
                    ->comment('The Racecourse ID')
                    ->nullable(false);

                $table->dateTime('meeting_date')
                    ->comment('The date of the meeting')
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
