<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $race_id
 * @property int $horse_id
 * @property int $jockey_id
 * @property int $allowance_weight
 * @property int $weight_unit_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class RaceHorseJockeyStatistic extends Model
{
    use HasFactory;
}
