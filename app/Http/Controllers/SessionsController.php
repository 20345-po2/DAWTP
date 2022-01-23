<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * @throws ValidationException
     */
    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'As credenciais fornecidas não são válidas.'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Bem-vindo de volta!');

    }


    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Até a próxima!');
    }
}
