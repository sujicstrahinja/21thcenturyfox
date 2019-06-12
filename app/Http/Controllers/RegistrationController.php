<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
//        $user = User::create(request(['name', 'email', md5('password'), 2]));
        $user = new User([
            'name' => $request-> input('name'),
            'email' => $request-> input('email'),
            'password' => md5($request->input('password')),
            'role_id' => 2
        ]);
        $user->save();
//        auth()->login($user);

        return redirect()->to('/');
    }
}
;