<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {
        $form->persist();

        // messages
        // session('message', 'Here is a default message');

        // flashing a message
        session()->flash('message', 'Thanks so much for signing up!');

    	// 1. Validation
    	// $this->validate(request(), [
    	// 	'name' => 'required',
    	// 	'email' => 'required|email',
    	// 	'password' => 'required|confirmed'
    	// ]);

    	// 2. Create and store user
    	// $user = User::create([
     //        'name' => request('name'),
     //        'email' => request('email'),
     //        'password' => bcrypt(request('password'))
     //    ]);

    	// // 3. Sign them in
    	// auth()->login($user);

     //    \Mail::to($user)->send(new Welcome($user));

    	// 4. Redirect to home page
    	return redirect()->home();
    }
}