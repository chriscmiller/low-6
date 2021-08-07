<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon\Carbon $created_at
 * @property \Carbon\Carbon\Carbon $updated_at
 */
class Trainer extends Model
{
    use HasFactory;
}
