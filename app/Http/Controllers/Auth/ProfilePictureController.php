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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = auth()->user()->username . '_maplmind' . auth()->user()->id . 'xhr_' . explode('@', auth()->user()->email)[0];
            $existingFilePath = public_path('img/' . $fileName[0]);
            if (File::exists($existingFilePath)) {
                File::delete($existingFilePath); // Delete the existing file
            }
            $image->move(public_path('img'), $fileName);
        } else {
            $fileName = 'default.jpg';
        }

        // $request->validate([
        //     'image' => [
        //         'required',
        //         // 'image',
        //         // 'mimes:jpg,png,jpeg',
        //         // 'dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        //         // 'max:2048'
        //     ], // Adjust validation rules as needed
        // ]);
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

        return back()->with('success', 'Image uploaded successfully.');
    }
}
