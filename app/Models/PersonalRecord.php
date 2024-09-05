<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class PersonalRecord extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'movement_id`',
        'value',
        'date'
    ];

    /**
     * Get the data for the user
     */
    public function user(): HasOne
    {
        return $this->hasOne(CliUser::class, 'id', 'user_id');
    }

    /**
     * Get the data for movement
     */
    public function movement(): HasOne
    {
        return $this->hasOne(Movement::class, 'id', 'movement_id');
    }
}
