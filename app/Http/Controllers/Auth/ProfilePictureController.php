<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ImgUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfilePictureController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:1024'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = auth()->user()->username . '_maplemind' . auth()->user()->id . 'xhr_' . explode('@', auth()->user()->email)[0];
            $existingFilePath = public_path('img/' . $fileName[0]);
            if (File::exists($existingFilePath)) {
                File::delete($existingFilePath); // Delete the existing file
            }
            $image->move(public_path('img'), $fileName);
        } else {
            $fileName = 'default.jpg';
        }

        $getImage = ImgUser::where('id', auth()->user()->img_user_id)->first();
        if (!$getImage) {
            $imgUser = ImgUser::create([
                'path' => $fileName,
            ]);
        } else {
            // update image
            $imgUser = ImgUser::where('id', auth()->user()->img_user_id)->first();
            $imgUser->path = $fileName;
            $imgUser->save();
        }

        $user = auth()->user();
        $user->img_user_id = $imgUser->id;
        $user->save();
        notify()->success('You\'ve got a really nice picture ' . Auth::user()->username, 'Amazing');

        return back()->with('success', 'Image uploaded successfully.');
    }
}
