<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Traits\MigrationHelpers;

class CreateJockeysTable extends Migration
{
    use MigrationHelpers;

    private const TABLE_NAME = 'jockeys';

    public function up(): void
    {
        $this->createTableIfNotExists(
            tableName: self::TABLE_NAME,
            callback: function (Blueprint $table): void {
                $table->id();

                $table->string('name')
                    ->comment('The name of the Jockey')
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
