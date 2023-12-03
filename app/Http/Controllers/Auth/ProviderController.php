<?php

namespace App\Http\Controllers\Auth;

use App\Models\Noc;
use App\Models\Step;
use App\Models\User;
use App\Models\Gender;
use App\Models\System;
use App\Models\Diploma;
use App\Models\ImgUser;
use App\Mail\MyTestEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Validation\Rules\Password;

class ProviderController extends Controller
{

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider, Request $request)
    {
        try {
            $socialuser = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            connectify('error', 'Error', 'Something went wrong, please try again later');
            return redirect()->route('login');
        }
        // $socialuser = Socialite::driver($provider)->user();

        $checkUser = User::where('email', $socialuser->email)->first();

        if ($checkUser) {
            auth()->login($checkUser);
            connectify('success', 'Welcome back ' . Auth::user()->username, 'Good to see you again');
            return redirect(RouteServiceProvider::HOME);
            // return redirect()->route('password.email');
        } else {
            $user = User::updateOrCreate([
                'provider_id' => $socialuser->id,
                'provider' => $provider,
            ], [
                'username' => User::generateUsername($socialuser->nickname),
                'email' => $socialuser->email,
                'password' => Hash::make('password'),
                // 'tmp_password' => 'maplemind_9Hfx4@1s',
                // 'password_confirmed' => 0,
                'system_id' => null,
                'role_id' => 2,
                'noc_id' => null,
                'step_id' => null,
                'diploma_id' => null,
                'gender_id' => null,
                // 'img_user_id' => 1,
                'eligibility_score' => 0,
                'crs_score' => 0,
                'arrima_score' => 0,
                'provider_token' => $socialuser->token,
            ]);

            auth()->login($user);
            $user = $request->user();
            $systems = System::all();
            $diplomas = Diploma::all();
            $steps = Step::all();
            $nocs = Noc::all();
            $genders = Gender::all();
            $image = ImgUser::where('id', Auth::user()->img_user_id)->first();
            $image ? $image = $image->path : $image = null;
            $password_confirmed = Auth::user()->password_confirmed;
            $tmp_password = Auth::user()->tmp_password;

            connectify('success', 'Welcome' . Auth::user()->username, 'It is time to complete your profile for better experience');
            // return view('auth.update-password-username', compact('user'));
            // return dashboard view
            return view('profile.edit', [
                'user' => $request->user(),
                'image' => $image,
                'nocs' => $nocs,
                'steps' => $steps,
                'diplomas' => $diplomas,
                'systems' => $systems,
                'genders' => $genders,
                'password_confirmed' => $password_confirmed,
                // 'tmp_password' => $tmp_password,
            ]);
        }
        // Mail::to('mehdinip@gmail.com')->send(new MyTestEmail('Mehdi'));
    }










    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
