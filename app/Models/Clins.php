<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clins extends Model
{
    protected $fillable = [
        'user_name',
        'user_email',
        'user_phone',
    ];
    use HasFactory;
}
