<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $race_meeting_id
 * @property \Carbon\Carbon $time
 * @property bool $is_handicap
 * @property bool $is_trifecta
 * @property bool $is_showcase
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Race extends Model
{
    use HasFactory;
}
