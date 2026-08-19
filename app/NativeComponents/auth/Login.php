<?php

namespace App\NativeComponents\auth;

use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;

class Login extends NativeComponent
{
    public string $username = '';

    public string $password = '';

    public string $usernameError = '';

    public string $passwordError = '';

    public string $generalError = '';

    public bool $isLoading = false;

    public function verify(): void
    {
        $this->usernameError = '';
        $this->passwordError = '';
        $this->generalError = '';

        $username = trim($this->username);
        $password = trim($this->password);

        $hasError = false;

        if (empty($username)) {
            $this->generalError = 'Username is required.';
            $hasError = true;
        }

        if (empty($password)) {
            $this->passwordError = 'Password is required.';
            $hasError = true;
        }

        if ($hasError) {
            $this->isLoading = false;

            return;
        }

        $this->isLoading = true;
    }

    public function render(): View
    {
        return view('native.auth.login', [
            'isLoading' => $this->isLoading,
            'usernameError' => $this->usernameError,
            'passwordError' => $this->passwordError,
            'generalError' => $this->generalError,
        ]);
    }
}
