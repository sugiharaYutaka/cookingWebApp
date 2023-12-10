<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SnsFollower extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'follower_email',
        'following_email',
    ];
}
