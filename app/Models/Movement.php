<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;

    /**
     * The attribute.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name'
    ];

    public function personalRecord(): HasMany
    {
        return $this->hasMany(personalRecord::class)->with('user');
    }


}
