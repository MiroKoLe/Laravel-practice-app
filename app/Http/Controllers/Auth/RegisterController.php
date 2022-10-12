<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' =>'required|max:255',
            'username' =>'required',
            'email' =>'required|email|max:255',
            'password' =>'required|confirmed'
        ]);

        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('dashboard');
    }
}
