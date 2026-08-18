<?php

use App\NativeComponents\auth\Login;
use App\NativeComponents\Home;
use Illuminate\Support\Facades\Route;

Route::native('/', Login::class)->name('login');
Route::native('/home', Home::class)->name('home');
