<?php

namespace App\Http\Controllers\SNS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SnsPost;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // データベースからランダムに5件の投稿を取得
        $randomPosts = SnsPost::inRandomOrder()->limit(5)->get();

        return view('sns.home', compact('randomPosts'));
    }
}
