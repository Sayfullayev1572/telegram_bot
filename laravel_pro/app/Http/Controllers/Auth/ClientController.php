<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Validation\ValidationException;

class ClientController extends Controller
{
    public function showRegisterPage()
    {
        return view('auth.register');
    }

    public function store(Request $reuqest)
    {
        $reuqest->validate([
            'name'=>'required',
            'email'=>'required|unique:clients',
            'password'=>'required|confirmed|min:6',
        ]);

        $client = Client::create([
            'name' => $reuqest->name,
            'email' => $reuqest->email,
            'password' => bcrypt($reuqest->password),
        ]);

        auth()->guard('client')->login($client);

        return redirect()->route('client.dashboard');

    }

    public function showLoginPage()
    {
        return view('auth.login');
    }

    public function login(Request $reuqest)
    {
        $reuqest->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if (! auth()->guard('client')->attempt($reuqest->only('email', 'password'), $reuqest->boolean('remember'))){

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        return redirect()->route('client.dashboard');
    }

    public function logout()
    {
        auth()->guard('client')->logout();
        return redirect()->route('loginClient');
    }
}
