<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }


    private function imgToken($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        echo $randomString;
    }


    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        // $charactersLength = strlen($characters);
        // $randomString = '';
        // for ($i = 0; $i < 12; $i++) {
        //     $randomString .= $characters[random_int(0, $charactersLength - 1)];
        // }

        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:' . User::class, 'alpha_dash'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $dob = $request->input('yob') . '-' . $request->input('mob') . '-' . $request->input('dob');

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
            'img_user_id' => 2,
            'gender_id' => $request->gender_id,
            'date_of_birth' => $dob,
            // 'dob' => 1,
            // 'mob' => 1,
            // 'yob' => 2000,
            'system_id' => NULL,
            'diploma_id' => 1,
            'noc_id' => 1,
            'step_id' => 1,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
