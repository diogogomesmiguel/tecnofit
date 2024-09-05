<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CliUser extends Model
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
}
