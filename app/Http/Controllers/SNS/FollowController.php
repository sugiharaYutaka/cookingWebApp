<?php

    namespace App\Http\Controllers\sns;

    class FollowController extends Controller
    {
        public function getFollow(Request $request)
        {
            Models\SnsFollowrs::create([
                'follower_email' => $request->email1,
                'following_email' => $request->email1,
            ]);
        }

        
    }
?>
