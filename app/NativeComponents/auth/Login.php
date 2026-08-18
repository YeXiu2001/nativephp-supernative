<?php

namespace App\NativeComponents\auth;

use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;

class Login extends NativeComponent
{
    public string $username = "";
    public string $password = "";
    public bool $isLoading = False;

    public function verify(): void
    {
        $this->isLoading = False;
        redirect("/home");
    }

    public function render(): View
    {
        return view('native.auth.login', ["isLoading" => $this->isLoading]);
    }
}