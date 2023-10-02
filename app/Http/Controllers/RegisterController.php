<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create() 
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            "username" => 'required|min:3|max:255|unique:users|alpha_dash',
            'password' => 'required|min:5|max:255|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect('/register')->withErrors($validator)->withInput();
        }
        
        // $validatedData = $validator->getData();
        // $validatedData['username'] = $request->username; 
        // $validatedData['password'] = Hash::make($validatedData['password']) ;
        User::create([
            'username' => $request->input('username'),
            // 'password' => Hash::make($request->input('password')),
            // Add other user attributes as needed
        ]);

        
        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}