<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Http\Request;

class RegistorUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
       $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => [
                'required',
                'string',
                'confirmed', // Matches with password_confirmation
                Password::min(8) // Minimum length of 8 characters
                // ->letters() // At least one letter
                // ->mixedCase() // At least one uppercase and one lowercase letter
                // ->numbers() // At least one number
                // ->symbols() // At least one special character
                // ->uncompromised(), // Ensures the password isn't in any known data breaches
            ],
        ]);
       $user = User::create($attributes);
       Auth::login($user);
       return redirect('/jobs');
        
    }
}
