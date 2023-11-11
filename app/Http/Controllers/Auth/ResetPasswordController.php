<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    public function showForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password),
                ])->save();
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            // Flash success message
            return redirect()->route('login')->with([
                'success_message' => __('Your password has been reset. You can now log in.')
            ]);
        } else {
            $errors = ['email' => __($status)];

            // Enhance error response based on specific scenarios
            if ($status === Password::INVALID_TOKEN) {
                $errors['token'] = __('The provided token is invalid.');
            } elseif ($status === Password::INVALID_USER) {
                $errors['email'] = __('We can\'t find a user with that email address.');
            }

            return back()->withErrors($errors);
        }
    }
}
