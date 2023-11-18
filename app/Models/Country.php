<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $incrementing = false; // Disable auto-incrementing id column
    public $timestamps = false; // Disable timestamps
    use HasFactory;
}
