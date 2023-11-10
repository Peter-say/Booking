<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Auth\EmailVerification;
use Illuminate\Http\Request;


class EmailVerificationController extends Controller
{
    protected $emailVerification;

    public function __construct(EmailVerification $emailVerification)
    {
        $this->emailVerification = $emailVerification;
    }

    public function verifyEmail(Request $request)
    {
        $user = User::where('email_verified_at', $request->token)->first();

        if (!$user) {
            return back()->with('error', 'Invalid verification token.');
        }

        $user->update([
            'verification_token' => null,
            'email_verified_at' => true,
        ]);

        // Additional logic...

        return redirect('login')->with('success_message', 'Email verified. You can now log in.');
    }
}
