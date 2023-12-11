<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SnsPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'text',
        'image_filename',
        'good',
        'email',
    ];
}
