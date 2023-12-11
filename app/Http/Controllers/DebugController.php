<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\SnsProfile;
use Illuminate\Http\Request;
use App\Models;

class DebugController extends Controller
{
    public function show()
    {
        return view('debug');
    }
    public function getRegister(Request $request)
    {
        Models\User::create([
            'email' => $request->email,
            'name' =>$request->name,
            'password' => $request->password,
        ]);
        return redirect()->back();
    }
    public function getPost(Request $request)
    {
        Models\SnsPost::create([
            'email' => $request->email,
            'text' =>$request->text,
        ]);
        return redirect()->back();
    }
    public function getReply(Request $request)
    {
        Models\SnsReply::create([
            'email' => $request->email,
            'text' =>$request->text,
        ]);
        return redirect()->back();
    }
    public function getProfile(Request $request)
    {
        Models\SnsProfile::create([
            'email' => $request->email,
            'comment' =>$request->text,
            'history' =>$request->history,
        ]);
        return redirect()->back();
    }
    public function getFollow(Request $request)
    {
        Models\SnsFollower::create([
            'follower_email' => $request->follower_email,
            'following_email' =>$request->following_email,
        ]);
        return redirect()->back();
    }
    public function getChapter(Request $request)
    {
        Models\Chapter::create([
            'email' => $request->email,
            'progress' =>$request->progress,
        ]);
        return redirect()->back();
    }

}
