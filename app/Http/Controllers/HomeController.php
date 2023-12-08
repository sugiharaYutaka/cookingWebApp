<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
         $randomPosts = Post::inRandomOrder()->limit(5)->get();
         
        return view('home');
    }
}
