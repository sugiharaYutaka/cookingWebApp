<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SnsProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'history',
        'comment',
    ];

    public function getData()
    {
        $data = DB::table('sns_profiles')
            ->join('users', 'sns_profiles.email', '=', 'users.email')
            ->where('sns_profiles.email', 'test@cwp.com')
            //->where('sns_profiles.email', 'a@a.a')
            ->select('name', 'history', 'text')
            ->get();
        return $data;
    }
}
