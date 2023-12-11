<?php

namespace App\Http\Controllers\SNS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SnsProfile;

class ProfileController extends Controller
{
    public function show()
    {
        $object = new SnsProfile();
        $data = $object->getData();
        return view('profile', ['data' => $data]);
    }

    public function change(Request $request)
    {
        return;
    }
}
