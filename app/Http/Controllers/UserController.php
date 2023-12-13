<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function showUserProfile($id)
    {
        $visitedUser = User::find($id);
        // $image = $user->image;
        return view('user-profile.user-profile', [
            'visitedUser' => $visitedUser,
            // 'image' => $image
        ]);
    }
}
