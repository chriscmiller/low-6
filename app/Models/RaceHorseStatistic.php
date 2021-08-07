<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $race_id
 * @property int $horse_id
 * @property int $weight
 * @property int $weight_unit_id
 * @property int $cloth_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class RaceHorseStatistic extends Model
{
    use HasFactory;
}
