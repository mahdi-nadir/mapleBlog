<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\ImgUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $socialuser = Socialite::driver($provider)->user();

        $checkUser = User::where('email', $socialuser->email)->first();

        if ($checkUser) {
            auth()->login($checkUser);
            $array_greetings = ['Hello', 'Hi', 'Welcome', 'Greetings', 'Hey', 'Howdy'];
            connectify('success', 'Welcome back ' . Auth::user()->username, 'Good to see you again');
            return redirect(RouteServiceProvider::HOME);
        } else {
            $user = User::updateOrCreate([
                'provider_id' => $socialuser->id,
                'provider' => $provider,
            ], [
                'email' => $socialuser->email,
                'system_id' => null,
                'role_id' => 2,
                'noc_id' => null,
                'step_id' => null,
                'diploma_id' => null,
                'gender_id' => null,
                'username' => User::generateUsername($socialuser->nickname),
                'img_user_id' => 1,
                'eligibility_score' => 0,
                'crs_score' => 0,
                'arrima_score' => 0,
                'provider_token' => $socialuser->token,
            ]);

            auth()->login($user);

            return view('auth.update-password-username', compact('user'));
        }
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
