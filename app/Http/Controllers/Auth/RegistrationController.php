<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Services\Auth\EmailVerification;
use App\Notifications\VerifyEmailNotification;

class RegistrationController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;

    public function registerForm()
    {
        return view('auth.register');
    }

    public function submitRegistrationForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = $this->createUser($data);

        // Send email verification notification
        $emailVerification = new EmailVerification(app('url'));
        $emailVerification->sendEmailVerificationNotification($user);

        return back()->with('success_message', 'Registration successful. Please check your email for verification.');
    }

    protected function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'User',
        ]);
    }
}
