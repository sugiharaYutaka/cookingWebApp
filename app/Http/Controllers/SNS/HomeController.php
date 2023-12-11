<?php

namespace App\Http\Controllers\SNS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SnsPost;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        User::create([
            'email' => 'aaa@ggg.com',
            'name' =>'john doe',
            'password' => '1234',
        ]);
        SnsPost::create([
            'email' => 'aaa@ggg.com',
            'text' =>'john doe',
            'image_filename' => 'dd.png',
        ]);

        // データベースからランダムに5件の投稿を取得
        $randomPosts = SnsPost::inRandomOrder()->limit(5)->get();

        return view('sns.home', compact('randomPosts'));
    }
}
