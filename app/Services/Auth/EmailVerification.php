<?php

namespace App\Services\Auth;

use Illuminate\Contracts\Routing\UrlGenerator;
use App\Models\User;
use App\Notifications\VerifyEmailNotification;

class EmailVerification
{
    protected $urlGenerator;

    public function __construct(UrlGenerator $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public function sendEmailVerificationNotification(User $user)
    {
        $verificationUrl = $this->getVerificationUrl($user);

        $user->notify(new VerifyEmailNotification($verificationUrl));

    }

    protected function getVerificationUrl(User $user)
{
    return $this->urlGenerator->temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(config('auth.verification.expire', 60)),
        [
            'id' => $user->getKey(),
            'hash' => sha1($user->getEmailForVerification()),
        ]
    );
}
}
