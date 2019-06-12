<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function store(Request $request) {
        $user = new User();
        $userData = $user->getUser($request->input('name'), $request->input('password'));
        session()->put('user', $userData);

        return redirect()->route('home');
    }

    public function destroy() {
        session()->forget('user');

        return redirect()->route('home');
    }
}
