<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:20',
            'lastName' => 'required|string|max:20',
            'email' => 'required|string|email:dns|max:60|unique:users',
            'password' => ['required', 'max:255', 'string', Password::min(8)->mixedCase()],
        ]);

        // Enkripsi password sebelum disimpan ke database
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Set default role sebagai 'user'
        $validatedData['role'] = 'user';

        User::create($validatedData);

        return redirect()->route('login.form')->with('success', 'User created successfully.');
    }
}
