<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {

        // $password = User::where('id', $request->user()->id)->first()->password;
        // $request->current_password == '' ? $request->current_password = NULL : $request->current_password = $request->current_password;
        $password_confirmed = User::where('id', $request->user()->id)->first()->password_confirmed;

        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        if ($password_confirmed == 0) {
            $request->user()->update([
                'password' => Hash::make($validated['password']),
                'password_confirmed' => 1,
            ]);
        } else {
            $request->user()->update([
                'password' => Hash::make($validated['password']),
            ]);
        }

        notify()->success('Great, your password has been updated', 'Well done');

        return back()->with('status', 'password-updated');
    }
}
