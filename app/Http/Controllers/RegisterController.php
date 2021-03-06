<?php

namespace App\Http\Controllers;

use App\Models\User;
use function PHPUnit\Framework\at;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|min:2|max:255',
            'username' => 'required|min:3|max:25|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255'
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'A conta foi criada com sucesso.');
    }
}
