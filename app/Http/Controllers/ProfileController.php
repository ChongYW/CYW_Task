<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rules\ValidIC;

use Auth;

class ProfileController
{

    public function showProfile(){

        $user = Auth::user();

        return view('/profile') -> with('user', $user);

    }

    public function showEditProfile(){

        $user = Auth::user();

        return view('/editProfile') -> with('user', $user);

    }

    public function updateProfile(Request $request){

        $request->validate([
            'name' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255',
            'u_icNo' => ['nullable', new ValidIC()],
            'u_birthday' =>'nullable|date|before:13 years ago',
        ],[
            'u_birthday.before' => 'The day of birth must be a date before 13 years ago.'
        ]);

        $user = Auth::user();
        $user -> name = $request['name'];
        $user -> email = $request['email'];
        $user -> u_icNo = $request['u_icNo'];
        $user -> u_country = $request['u_country'];
        $user -> u_birthday = $request['u_birthday'];
        $user -> save();

        return redirect('/home') -> with('status', "Data Updated!");

    }

    public function testing(){

        $user = Auth::user();

        return view('/testing') -> with('user', $user);

    }

}
