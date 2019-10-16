<?php

namespace App\Middleware;

use App\Models\User;
use Phplite\Cookie\Cookie;
use Phplite\Session\Session;

class AuthUser {
    public function handle() {
        $auth = Session::get('users') ?: Cookie::get('users');
        if (! $auth) {
            return redirect(url('login'));
        }
        $user = User::where('id', '=', $auth)->first();
        if (! $user) {
            return redirect(url('login'));
        }
    }
}