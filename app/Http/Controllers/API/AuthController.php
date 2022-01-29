<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseController
{
    public function signin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $authUser = Auth::user();
            $success['token'] = $authUser->createToken('MyAuthApp')->plainTextToken;
            $success['name'] = $authUser->name;

            return $this->sendResponse($success, 'User signed in');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }

    public function signup(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);


        $attributes['password'] = bcrypt($attributes['password']);
        $user = User::create($attributes);
        $success['token'] = $user->createToken('MyAuthApp')->plainTextToken;
        $success['name'] = $user->name;

        return $this->sendResponse($success, 'User created successfully.');
    }

}
