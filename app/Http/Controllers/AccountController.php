<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    
    public function create(){
        return inertia(
            'Register/Create'
        );
    }

    public function store(Request $request){

        

        $user = User::create($request->validate([
            'name'=>"required",
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed'
        ]));
        Auth::login($user);
        return redirect()->intended()->with('success', 'account create');
    }
}
