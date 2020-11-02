<?php

namespace App\Http\Controllers\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {   
        $user = Auth::user();

        return view('users.edit', compact('user'));
    }



    public function update(Request $request)
    { 

        
        $this->validate($request, [
            'name' =>'required',
            'email' => 'required',
        ]);




        $user = User::find(Auth::user()->id);
        

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');


        $user->save();



         return back();
    }
}