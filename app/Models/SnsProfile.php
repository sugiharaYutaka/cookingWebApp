<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SnsProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'history',
        'comment',
    ];
}
