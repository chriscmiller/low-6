<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Traits\MigrationHelpers;

class CreateRacecourseTable extends Migration
{
    use MigrationHelpers;

    private const TABLE_NAME = 'racecourses';

    public function up(): void
    {
        $this->createTableIfNotExists(
            tableName: self::TABLE_NAME,
            callback: function (Blueprint $table): void {
                $table->id();

                $table->integer('country_id')
                    ->comment('The Country in which this racecourse is found')
                    ->nullable(false);

                $table->string('name')
                    ->comment('The name of this racecourse')
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
