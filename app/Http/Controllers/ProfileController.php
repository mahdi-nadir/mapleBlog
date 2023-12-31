<?php

namespace App\Http\Controllers;

use App\Models\Noc;
use App\Models\Step;
use App\Models\User;
use App\Models\Gender;
use App\Models\System;
use App\Models\Diploma;
use App\Models\ImgUser;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $systems = System::all();
        $diplomas = Diploma::all();
        $steps = Step::all();
        $nocs = Noc::all();
        $genders = Gender::all();
        $image = ImgUser::where('id', Auth::user()->img_user_id)->first();
        $image ? $image = $image->path : $image = null;
        $password_confirmed = Auth::user()->password_confirmed;

        // emotify('success', 'Well done, your profile is now updated');
        return view('profile.edit', [
            'user' => $request->user(),
            'image' => $image,
            'nocs' => $nocs,
            'steps' => $steps,
            'diplomas' => $diplomas,
            'systems' => $systems,
            'genders' => $genders,
            'password_confirmed' => $password_confirmed,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        // $user->gender_id = $request->input('gender_id');

        $user->system_id = $request->input('system_id');

        $user->diploma_id = $request->input('diploma_id');

        $user->noc_id = $request->input('noc_id');

        $user->step_id = $request->input('step_id');

        if ($request->input('dob')) {
            $dob = $request->input('yob') . '-' . $request->input('mob') . '-' . $request->input('dob');
            $user->date_of_birth = $dob;
        }

        if ($request->input('gender_id')) {
            $user->gender_id = $request->input('gender_id');
        }

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        if ($user->system_id == NULL || $user->diploma_id == NULL || $user->noc_id == NULL || $user->step_id == NULL || $user->gender_id == NULL || $user->date_of_birth == NULL) {
            notify()->warning('Great, but there\'s still other information to update', 'Almost done');
        } else {
            notify()->success('Well done, your profile is now updated', 'Success');
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    // public function updateFromSocialMedia(Request $request)
    // {
    //     $validated = $request->validateWithBag('updatePassword', [
    //         'password' => ['required', Password::defaults(), 'confirmed'],
    //     ]);

    //     $request->user()->update([
    //         'password' => Hash::make($validated['password']),
    //     ]);

    //     connectify('success', 'Welcome to MapleMind', 'It\'s a pleasure to have you here ' . Auth::user()->username);

    //     return view('dashboard');
    // }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
