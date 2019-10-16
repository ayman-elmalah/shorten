<?php

namespace App\Middleware;

use App\Models\User;
use Phplite\Cookie\Cookie;
use Phplite\Session\Session;

class GuestUser {
    public function handle() {
        $auth = Session::get('users') ?: Cookie::get('users');
        if ($auth) {
            $user = User::where('id', '=', $auth)->first();
            if ($user) {
                return redirect(url('/'));
            }
        }
    }
}